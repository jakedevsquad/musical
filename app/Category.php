<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Category extends Model
{

    protected $guarded = [];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
