<?php

namespace App\Http\Controllers;

use App\Video;

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

        return view('videos', [
            'videos' => $videos,
            'filter' => request('filter')
        ]);
    }

    public function create() {
        return view('videos-create');
    }

    public function store()
    {
        Video::create($this->validation());

        return $this->ok('Video Created!');
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
}
