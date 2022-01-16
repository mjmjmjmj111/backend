<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        
        $categories =  [
            [
                'name' => 'Visual basicについて',
                'thumbnail' => 'vbpython.png',
                'sort' => 1
            ],
            [
                'name' => 'Pythonについて',
                'thumbnail' => 'hensu.png',
                'sort' => 2
            ],

        ];

        foreach($categories as $category) {
            Category::create($category);
        }

    }
}
