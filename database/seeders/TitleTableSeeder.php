<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Title;

class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Title::truncate();

        $titles =  [
            [
                'category_id' => 1,
                'title' => 'Visual Basicについて',
                'description' => 'Visual Basicについてのクイズです。',
                'thumbnail' => 'https://image.flaticon.com/icons/png/512/29/29609.png'
            ],
            [
                'category_id' => 1,
                'title' => '演算子の種類と使用例',
                'description' => '演算子の種類と使用例についてのクイズです',
                'thumbnail' => 'https://image.flaticon.com/icons/png/512/29/29609.png'
            ],
            [
                'category_id' => 2,
                'title' => 'Pythonについて',
                'description' => 'Pythonについてのクイズです。',
                'thumbnail' => 'https://cdn.icon-icons.com/icons2/112/PNG/512/python_18894.png'
            ],
            [
                'category_id' => 3,
                'title' => 'データ型について',
                'description' => 'データ型についてのクイズです。',
                'thumbnail' => 'data.png'
            ],
            [
                'category_id' => 4,
                'title' => 'if文について',
                'description' => '制御構造、if文についてのクイズです。',
                'thumbnail' => 'ifbun.png'
            ]
        ];

        foreach($titles as $title) {
            Title::create($title);
        }
        
    }
}
