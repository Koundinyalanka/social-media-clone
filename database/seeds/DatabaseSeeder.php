<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Elliot Pettingale',
            'username' => 'elipettingale',
            'email' => 'elipettingale@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $users = factory(User::class, 20)->create();
        $posts = factory(Post::class, 100)->create();
    }
}
