<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizAnswer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quiz_question_id',
        'quiz_option_id',
        'time',
        'participate_id',
    ];

    /**
     * Define Table name
     * @var string
     * @Author: Md. Abdullah <abdullah001rti@gmail.com>
     * @Date: 27/02/2021
     */

    protected $table = 'quiz_answers';
}
