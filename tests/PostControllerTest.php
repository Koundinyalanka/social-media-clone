<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use App\Post;
use Faker\Factory;

class PostControllerTest extends TestCase
{
    use DatabaseTransactions;

    public function test_redirect_guest()
    {
        $this->visit('/posts')
            ->seePageIs('/login');
    }

    public function test_allow_user_access()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->visit('/posts')
            ->seePageIs('/posts');
    }

    public function test_display_posts()
    {
        $user = factory(User::class)->create();
        $post = factory(Post::class)->create();

        $this->actingAs($user)
            ->visit('/posts')
            ->see($post->body);
    }

    public function test_save_new_post()
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

    public function test_validate_new_post()
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
