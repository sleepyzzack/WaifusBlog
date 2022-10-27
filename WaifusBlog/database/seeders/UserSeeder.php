<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Post;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "juan juan lopez",
            'email' => 'juanjuan@mail.com',
            'password' => bcrypt('diccionariogangoso')

        ]);

        User::factory(14)->create();
    }
}
