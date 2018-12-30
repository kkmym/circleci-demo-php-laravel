<?php

namespace App\Models\QA;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = ['answer_id', 'question_id', 'answer'];
    protected $primaryKey = 'answer_id';
    //
}
