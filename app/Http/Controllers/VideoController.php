<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

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
            'video'       => 'required|mimes:mp4|max:32000'
        ]);
        $path = request()->file('video')->store('videos');
        unset($attributes['video']);
        $attributes = array_merge($attributes, ['url' => $path]);

        Video::create($attributes);

        return $this->ok('Video Created!');
    }

    public function show($id)
    {
        return view('video.show', [
            'video' => Video::find($id)
        ]);
    }

    public function edit($id)
    {
        return view('video.edit', [
            'video' => Video::find($id)
        ]);
    }

    public function update(Video $video)
    {
        $attributes = request()->validate([
            'name'        => ['required', 'min:3', 'max:64', Rule::unique('videos')->ignore($video->id)],
            'description' => 'max:1023',
            'video'       => is_string(request('video')) ? 'required|regex:/.mp4$/' : 'required|mimes:mp4|max:32000'
        ]);

        $old_video = null;

        if (!is_string(request('video'))) {
            $path = request()->file('video')->store('videos');
            unset($attributes['video']);
            $attributes = array_merge($attributes, ['url' => $path]);
            $old_video = $video->url;
        } else {
            unset($attributes['video']);
            $attributes = array_merge($attributes, ['url' => request('video')]);
        }

        $video->update($attributes);

        if ($old_video) {
            Storage::delete($old_video);
        }

        return $this->ok('Video Updated!');
    }

    public function destroy(Video $video)
    {
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
}
