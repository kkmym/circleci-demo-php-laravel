<?php

use Illuminate\Database\Seeder;
use App\Models\QA\Question;

class QA_QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $questions = [
            [
                'title' => 'テスト登録した質問１'
                ,'description' => "テスト登録した質問１\nテスト登録した質問１"
                ,'created_at' => $now
                ,'updated_at' => $now
            ]
            ,[
                'title' => 'テスト登録した質問２'
                ,'description' => "テスト登録した質問２\nテスト登録した質問２"
                ,'created_at' => $now
                ,'updated_at' => $now
            ]
        ];

        foreach($questions as $question) {
            DB::table('questions')->insert($question);
        }
    }
}
