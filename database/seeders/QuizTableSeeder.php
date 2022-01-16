<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::truncate();

        $quizs =  [
            [
                'title_id' => 1,
                'question' => '変数の宣言の構文は？',
                'answer1' => 'Dim = 変数名',
                'answer2' => 'Dim 変数名 As データ型',
                'answer3' => 'Dim 変数名 データ型',
                'answer4' => 'Dim 変数名',
                'answer' => 2,
                'description' =>"変数は値の受け渡しに使用する。\n変数の宣言を行うときは、Dim、Asというキーワードを使って記述する。 \n例 Dim Hensu As Integer"
            ],
            [
                'title_id' => 1,
                'question' => '複数の変数をまとめて宣言する構文は？',
                'answer1' => 'Dim 変数名１ + 変数名２ As データ型',
                'answer2' => 'Dim 変数名１ & 変数名２ As データ型',
                'answer3' => 'Dim 変数名１,変数名２ As データ型',
                'answer4' => 'Dim 変数名１,変数名２',
                'answer' => 3,
                'description' => '.'
            ],
            [
                'title_id' => 1,
                'question' => '異なるデータ型を持つ複数の変数を宣言する構文は？',
                'answer1' => 'Dim 変数名１ As データ型,変数名２ As データ型',
                'answer2' => 'Dim 変数名１,変数名２ As データ型',
                'answer3' => 'Dim 変数名１,変数名２ データ型',
                'answer4' => 'Dim 変数名１ As データ型 & As データ型',
                'answer' => 1,
                'description' => '.'
            ],
            [
                'title_id' => 1,
                'question' => '変数に値を代入するための正しい演算子は？',
                'answer1' => '+',
                'answer2' => '=',
                'answer3' => '*',
                'answer4' => '&',
                'answer' => 2,
                'description' => '.'
            ],
            [
                'title_id' => 1,
                'question' => '変数名の付け方について間違っているものはどれ？',
                'answer1' => '変数名にはa～zなどの小文字やA～Zなどの大文字を含むアルファベットを使用することができる',
                'answer2' => '変数名には0～9などの数字を使用することができる',
                'answer3' => '変数名には_(アンダーバー)を使用することができる',
                'answer4' => '「1Hensu」、「2Hensu」のように先頭文字に数字を使用することができる',
                'answer' => 4,
                'description' => '.'
            ],
            [
                'title_id' => 1,
                'question' => '整数を扱うデータ型ではないものはどれ？',
                'answer1' => 'String',
                'answer2' => 'Byte',
                'answer3' => 'Long',
                'answer4' => 'Integer',
                'answer' => 1,
                'description' => '.'
            ],
            [
                'title_id' => 1,
                'question' => '浮動小数点のデータ型はどれ？',
                'answer1' => 'Single',
                'answer2' => 'String',
                'answer3' => 'Byte',
                'answer4' => 'Integer',
                'answer' => 1,
                'description' => '.'
            ],
            [
                'title_id' => 1,
                'question' => '10進数のデータ型はどれ？',
                'answer1' => 'Decimal',
                'answer2' => 'Byte',
                'answer3' => 'Integer',
                'answer4' => 'Long',
                'answer' => 1,
                'description' => '.'
            ],
            [
                'title_id' => 1,
                'question' => '文字数を扱うことができるデータはどれ？',
                'answer1' => 'String',
                'answer2' => 'Integer',
                'answer3' => 'Long',
                'answer4' => 'Double',
                'answer' => 1,
                'description' => '.'
            ],
            [
                'title_id' => 1,
                'question' => '日付と時刻を扱うことができるデータ型はどれ？',
                'answer1' => 'Date',
                'answer2' => 'Day',
                'answer3' => 'String',
                'answer4' => 'Integer',
                'answer' => 1,
                'description' => '.'
            ],
            [
                'title_id' => 2,
                'question' => '=、+=、-=、*=のような演算子は何という？',
                'answer1' => '論理演算子',
                'answer2' => '算術演算子',
                'answer3' => '代入演算子',
                'answer4' => '連結演算子',
                'answer' => 3,
                'description' => '代入演算子は演算子の右辺の値を左辺の要素に代入することができる'
            ],
            [
                'title_id' => 2,
                'question' => '+、&のような演算子は何という？',
                'answer1' => '算術演算子',
                'answer2' => '連結演算子',
                'answer3' => '代入演算子',
                'answer4' => '比較演算子', 
                'answer' => 2,
                'description' => '連結演算子は文字列同士を連結することができる'
            ],
            [
                'title_id' => 2,
                'question' => '+、-、*、/のような演算子は何という？',
                'answer1' => 'ビット演算子',
                'answer2' => '代入演算子',
                'answer3' => '論理演算子',
                'answer4' => '算術演算子',
                'answer' => 4,
                'description' => '算術演算子は数値の足し算や引き算、掛け算などすることができる'
            ],
            [
                'title_id' => 2,
                'question' => '=、>、<、>=、<=のような演算子は何という？',
                'answer1' => '比較演算子',
                'answer2' => 'ビット演算子',
                'answer3' => '代入演算子',
                'answer4' => '連結演算子',
                'answer' => 1,
                'description' => '比較演算子は2つの式を比較する時に使用する'
            ],
            [
                'title_id' => 2,
                'question' => 'And、Or、Notのような演算子は何という？',
                'answer1' => '算術演算子',
                'answer2' => '代入演算子',
                'answer3' => '論理演算子',
                'answer4' => 'ビット演算子',
                'answer' => 3,
                'description' => '論理演算子は複数の条件式を組み合わせて、複合的な条件の判定を行うことができる'
            ],
            [
                'title_id' => 2,
                'question' => '+、-、*、/のような演算子は何という？',
                'answer1' => 'ビット演算子',
                'answer2' => '代入演算子',
                'answer3' => '論理演算子',
                'answer4' => '算術演算子',
                'answer' => 4,
                'description' => '算術演算子は数値の足し算や引き算、掛け算などすることができる'
            ]
        ];

        foreach($quizs as $quiz) {
            Quiz::create($quiz);
        }
        //
    }
}
