<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use App\Post;
use Faker\Factory;

class PostControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function test_guest_is_redirected()
    {
        $this->visit('/posts')
            ->seePageIs('/login');
    }

    public function test_user_can_access()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->visit('/posts')
            ->seePageIs('/posts');
    }

    public function test_post_display()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();

        $this->actingAs($user)
            ->visit('/posts')
            ->see($post->body);
    }

    public function test_post_store()
    {
        $user = factory(User::class)->create();
        $body = Factory::create()->text(140);

        $this->actingAs($user)->call('POST', '/posts', [
            'body' => $body
        ]);

        $this->actingAs($user)
            ->visit('/posts')
            ->see($body);
    }

    public function test_post_store_validation()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->call('POST', '/posts', []);

        $this->assertEquals(302, $response->status(), "Validation accepted a post without a body");

        $response = $this->actingAs($user)->call('POST', '/posts', [
            'body' => str_repeat('a', 141)
        ]);

        $this->assertEquals(302, $response->status(), "Validation accepted a post with a body of length 141");
    }
}
