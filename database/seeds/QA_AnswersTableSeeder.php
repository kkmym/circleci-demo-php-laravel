<?php

use Illuminate\Database\Seeder;
use App\Models\QA\Answer;

class QA_AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 登録日時/更新日時にセットする日時
        $now = date('Y-m-d H:i:s');

        // 登録されているquestionsのIDを取得
        $question_ids = DB::table('questions')->pluck('question_id');
        // それぞれの質問IDに対して ５つの回答を登録
        foreach($question_ids as $question_id) {
            for ($i=1; $i<=5; $i++) {
                DB::table('answers')->insert(
                    [
                        'question_id' => $question_id
                        ,'answer' => "質問ID[$question_id]に対する質問（$i 個目）"
                        ,'created_at' => $now
                        ,'updated_at' => $now
                    ]
                );
            }
        }
    }
}
