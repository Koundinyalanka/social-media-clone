<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use App\Post;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    public function test_posts_relationship()
    {
        $users = factory(User::class, 2)->create();
        $post = factory(Post::class)->create(['user_id' => $users[0]->id]);

        $this->assertTrue($users[0]->posts()->contains($post));
        $this->assertFalse($users[1]->posts()->contains($post));
    }
}
