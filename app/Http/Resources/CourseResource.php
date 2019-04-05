<?php

namespace App\Http\Resources;

use App\Course;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    public function toArray($request)
    {
        /** @var Course $this */
        return [
            'id'       => $this->id,
            'name'     => $this->name,
            'category' => [
                'id'   => $this->category->id,
                'name' => $this->category->name
            ],
        ];
    }
}
