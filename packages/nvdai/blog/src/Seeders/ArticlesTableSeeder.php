<?php

namespace Nvdai\Blog\Seeders;

use Nvdai\Blog\Models\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title' => 'This is my first articles',
            'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis est, doloremque similique aliquid, possimus minus fugiat voluptatibus quidem suscipit dignissimos aspernatur saepe sed. Aliquid harum error molestias quod blanditiis repellat.',
        ]);
    }
}
