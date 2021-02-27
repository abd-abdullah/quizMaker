<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quiz_id',
        'author_id',
        'total_point',
        'total_time',
        'rank',
        'status',
    ];

    /**
     * Define Table name
     * @var string
     * @Author: Md. Abdullah <abdullah001rti@gmail.com>
     * @Date: 27/02/2021
     */

    protected $table = 'results';
}
