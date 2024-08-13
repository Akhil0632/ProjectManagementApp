<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeEntry extends Model
{
    use HasFactory;

    protected $fillable = ['task_id', 'hours', 'date', 'description'];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
