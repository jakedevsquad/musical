<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $description
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Video extends Model
{
    protected $guarded = [];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
