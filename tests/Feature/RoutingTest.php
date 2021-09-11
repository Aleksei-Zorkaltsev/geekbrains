<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_url()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_auth_url()
    {
        $response = $this->get('/auth');
        $response->assertStatus(200);
    }


    public function test_categories_url()
    {
        $response = $this->get('/categories');
        $response->assertStatus(200);
    }

    public function test_news_url()
    {
        $response = $this->get('/news');
        $response->assertStatus(200);
    }

    public function test_one_news_url()
    {
        $id = rand(1, 5);

        $response = $this->get('/news/' . $id);
        $response->assertStatus(200);
    }

    public function test_feedback_url()
    {
        $response = $this->get('/feedback');
        $response->assertStatus(200);
    }
    public function test_feedback_add_url()
    {
        $response = $this->get('/feedback/create');
        $response->assertStatus(200);
    }

    public function test_Admin_categories_url()
    {
        $response = $this->get('/admin/categories');
        $response->assertStatus(200);
    }

    public function test_Admin_news_url()
    {
        $response = $this->get('/admin/news');
        $response->assertStatus(200);
    }
    public function test_Admin_newsAdd_url()
    {
        $response = $this->get('/admin/news/create');
        $response->assertStatus(200);
    }

    public function test_Admin_feedback_url()
    {
        $response = $this->get('/admin/feedback');
        $response->assertStatus(200);
    }

}
