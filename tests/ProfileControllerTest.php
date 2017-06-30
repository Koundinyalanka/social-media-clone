<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use App\Post;

class ProfileControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function test_redirect_guest()
    {
        $user = factory(User::class)->create();

        $this->visit('/profile/' . $user->username)
            ->seePageIs('/login');
    }

    public function test_display_user_info()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->visit('/profile/' . $user->username)
            ->see($user->name)
            ->see('@' . $user->username);
    }

    public function test_only_display_user_posts()
    {
        $users = factory(User::class,2)->create();
        $posts[0] = factory(Post::class)->create(['user_id' => $users[0]->id]);
        $posts[1] = factory(Post::class)->create(['user_id' => $users[1]->id]);

        $this->actingAs($users[0])
            ->visit('/profile/' . $users[0]->username)
            ->see($posts[0]->body)
            ->dontSee($posts[1]->body);
    }
}
