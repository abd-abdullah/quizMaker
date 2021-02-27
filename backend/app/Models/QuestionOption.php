<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_bank_id',
        'name',
        'is_correct',
    ];

    /**
     * Define Table name
     * @var string
     * @Author: Md. Abdullah <abdullah001rti@gmail.com>
     * @Date: 27/02/2021
     */

    protected $table = 'question_options';
}
