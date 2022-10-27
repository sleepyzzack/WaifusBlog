<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use App\Models\Posts;
use Illuminate\Database\Seeder;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = Post::factory(100)->create();
        
        foreach ($post as $NewPost) {
            Image::factory(1)->create([
                'imageable_id' => $NewPost->id,
                'imageable_type' => Posts::class

            ]);

        }

    }
}
