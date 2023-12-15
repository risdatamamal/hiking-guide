<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'title'      => 'Blog',
                'content'   => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
                'category'  => 'Tools',
                'image_url'     => '',
                'slug' => 'blog'
            ]
        ];

        foreach ($data as $key => $value) {
            Blog::create($value);
        }
    }
}
