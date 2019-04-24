<?php

namespace App\Http\Controllers;

use App\Course;
use App\Lesson;
use App\Video;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;

class VideoController extends Controller
{
    public function index()
    {
        $filter = request('filter');
        if ($filter) {
            $filter = '%' . $filter . '%';
            $query  = Video::query()->where('name', 'like', $filter)->orderBy('name');
            $videos = $query->paginate(10);
        } else {
            $videos = Video::orderBy('name')->paginate(10);
        }

        return view('video.index', [
            'videos' => $videos,
            'filter' => request('filter')
        ]);
    }

    public function create()
    {
        return view('video.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name'        => 'required|unique:videos|min:3|max:64',
            'description' => 'max:1023',
            'video'       => 'required|mimes:mp4|max:32000',
            'image'       => 'required|mimes:png,jpeg'
        ]);
        $video       = request()->file('video')->store('public/videos');
        $image       = request()->file('image')->store('public/images');
        unset($attributes['video']);
        unset($attributes['image']);
        $attributes = array_merge($attributes, ['url' => $video], ['photo_url' => $image]);

        Video::create($attributes);

        return $this->ok('Video Created!');
    }

    public function show(Video $video)
    {
        return view('video.show', [
            'video' => $video
        ]);
    }

    public function edit(Video $video)
    {
        return view('video.edit', [
            'video' => Video::find($video->id)
        ]);
    }

    public function update(Video $video)
    {
        $attributes = request()->validate([
            'name'        => ['required', 'min:3', 'max:64', Rule::unique('videos')->ignore($video->id)],
            'description' => 'max:1023',
            'video'       => is_string(request('video')) ? 'required|regex:/.mp4$/' : 'required|mimes:mp4|max:32000',
            'image'       => is_string(request('image')) ? ['required', 'regex:/(.png$|.jpeg$)/'] : 'required|mimes:png,jpeg',
        ]);

        $old_video = null;
        $old_image = null;

        if (!is_string(request('video'))) {
            $path = request()->file('video')->store('public/videos');
            unset($attributes['video']);
            $attributes = array_merge($attributes, ['url' => $path]);
            $old_video  = $video->url;
        } else {
            unset($attributes['video']);
            $attributes = array_merge($attributes, ['url' => request('video')]);
        }

        if (!is_string(request('image'))) {
            $path = request()->file('image')->store('public/images');
            unset($attributes['image']);
            $attributes = array_merge($attributes, ['photo_url' => $path]);
            $old_video  = $video->photo_url;
        } else {
            unset($attributes['image']);
            $attributes = array_merge($attributes, ['photo_url' => request('image')]);
        }

        $video->update($attributes);

        if ($old_video) {
            Storage::delete($old_video);
        }

        if ($old_image) {
            Storage::delete($old_image);
        }

        return $this->ok('Video Updated!');
    }

    public function destroy(Video $video)
    {
        if ($video->lessons()->exists()) {
            return response("This video is being used in a lesson and can not be deleted!", 403);
        }

        Storage::delete($video->url);
        $video->delete();

        return $this->ok('Video Deleted!');
    }

    public function play($id)
    {
        $video        = Video::find($id);
        $fileContents = Storage::disk('local')->get("{$video->url}");
        $response     = Response::make($fileContents, 200);
        $response->header('Content-Type', "video/mp4");
        return $response;
    }

    public function list(Course $course)
    {
        $existingVideos = collect([]);
        /** @var Lesson $lesson */
        foreach ($course->lessons as $lesson) {
            $existingVideos->push($lesson->video);
        }

        return Video::all()->diff($existingVideos);
    }
}
