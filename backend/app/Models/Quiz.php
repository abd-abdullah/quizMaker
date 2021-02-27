<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'thumbnail',
        'total_time',
        'start_time',
        'end_time',
        'author_id',
        'status',
    ];

    /**
     * Define Table name
     * @var string
     * @Author: Md. Abdullah <abdullah001rti@gmail.com>
     * @Date: 27/02/2021
     */

    protected $table = 'quizzes';
}
