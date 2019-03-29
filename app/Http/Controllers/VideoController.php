<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

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
        Video::create($this->validation());

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
        return view('video.edit');
    }

    public function update(Video $video)
    {
        //TODO:: If just updating the video name or description, don't do upload of video again.
        $video->update($this->validated());

        return $this->ok('Video Updated!');
    }

    public function destroy(Video $video)
    {
        $video->delete();

        return $this->ok('Video Deleted!');
    }

    private function validation()
    {
        $attributes = request()->validate([
            'name'        => 'required|unique:videos|min:3|max:64',
            'description' => 'max:1023',
            'video'       => 'required|mimes:mp4|max:32000'
        ]);

        $path = request()->file('video')->store('videos');

        unset($attributes['video']);

        return array_merge($attributes, ['url' => $path]);
    }

    public function play($id)
    {
        $video = Video::find($id);
        $fileContents = Storage::disk('local')->get("{$video->url}");
        $response = Response::make($fileContents, 200);
        $response->header('Content-Type', "video/mp4");
        return $response;
    }
}
