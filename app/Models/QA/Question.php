<?php

namespace App\Models\QA;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = ['question_id'];
    protected $primaryKey = 'question_id';

    public function getQuestionsWithLatestAnswer()
    {
        $SQL = <<< END_OF_SQL
SELECT
    q.question_id
    ,q.title
    ,q.description
    ,q.updated_at AS q_updated_at
    ,a.answer
    ,a.updated_at AS a_updated_at
FROM questions AS q
LEFT OUTER JOIN (
    SELECT
        answer_id
        ,answer
        ,updated_at
        ,question_id
    FROM answers
    WHERE answer_id IN (
        SELECT
            MAX(answer_id)
        FROM answers
        GROUP BY
            question_id
    )
) AS a
    ON q.question_id = a.question_id
ORDER BY
    a_updated_at DESC
END_OF_SQL;
        $questions = \DB::select($SQL);
        return $questions;
    }
}
