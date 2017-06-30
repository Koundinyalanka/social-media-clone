<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use App\Post;

class PostTest extends TestCase
{
    use DatabaseTransactions;

    public function test_user_relationship()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create(['user_id' => $user->id]);

        $this->assertEquals($user->id, $post->user->id);
    }
}
