<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quiz_id',
        'question_bank_id',
        'value',
        'status',
    ];

    /**
     * Define Table name
     * @var string
     * @Author: Md. Abdullah <abdullah001rti@gmail.com>
     * @Date: 27/02/2021
     */

    protected $table = 'quiz_questions';
}
