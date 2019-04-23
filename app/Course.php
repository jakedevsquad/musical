<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Category $category
 * @property Lesson $lessons
 */
class Course extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function getNextLessonOrderNumber()
    {
        $highestOrder = 0;
        if ($this->lessons()->exists()) {
            /** @var Lesson $lesson */
            foreach ($this->lessons as $lesson) {
                $highestOrder = $lesson->order > $highestOrder ? $lesson->order : $highestOrder;
            }
        }
        return $highestOrder + 1;
    }
}
