<?php

namespace App\Http\Resources;

use App\Lesson;
use App\Video;
use Illuminate\Http\Resources\Json\JsonResource;

class LessonResource extends JsonResource
{
    public function toArray($request)
    {
        /** @var Lesson $this */
        return [
            'id'              => $this->id,
            'name'            => $this->name,
            'description'     => $this->description,
            'course_id'       => $this->course,
            'video_photo_url' => $this->video->photo_url,
            'video_url'       => $this->video->url,
        ];
    }
}
