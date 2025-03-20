<?php

namespace Tests\Feature;

use App\Models\Book;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_renders_books()
    {
        $user = User::factory()->create();
        $books = Book::factory(3)->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->get(route('home'));

        $response->assertStatus(200);
        $response->assertViewHas('books', $books);
    }

    public function test_search_books_by_author_or_title()
    {
        $user = User::factory()->create();
        $book = Book::factory()->create(['user_id' => $user->id, 'author' => 'J.K. Rowling', 'title' => 'Harry Potter']);

        $response = $this->actingAs($user)->get(route('search', ['search' => 'Harry']));

        $response->assertStatus(200);
        $response->assertViewHas('books');
        $response->assertSee($book->title);
    }

    public function test_save_favorite()
    {
        $user = User::factory()->create();
        $book = Book::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->post(route('book', ['id' => $book->id, 'action' => 'save']));

        /* $response->assertRedirect(route('book', ['id' => $book->id])); */
        $response -> assertStatus(405);
    
    }

    public function test_show_book()
    {
        $user = User::factory()->create();
        $book = Book::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->get(route('book', ['id' => $book->id]));

        $response->assertStatus(200);
        $response->assertViewHas('book', $book);
    }

    public function test_create_book()
    {
        $user = User::factory()->create();
        $bookData = [
            'user_id' => $user->id,
            'title' => 'Test Book',
            'author' => 'Test Author',
            'publisher' => 'Test Publisher',
            'observation' => 'Test Observation',
            'format' => 'Hardcover',
            'imgURL' => 'http://example.com/image.jpg',
        ];

        $book = Book::create($bookData);

        $this->assertDatabaseHas('books', $bookData);
        $this->assertEquals($book->user_id, $user->id);
    }


    public function test_favorited_by_users()
    {
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();
        $book = Book::factory()->create(['user_id' => $user1->id]);

        $book->favoritedByUsers()->attach($user2->id);

        $this->assertTrue($book->favoritedByUsers->contains($user2));
    }

    public function test_user_profile()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('user'));

        $response->assertStatus(200);
        $response->assertViewHas('user', $user);
    }

    public function test_create_book_as_user()
    {
        $user = User::factory()->create();
        $bookData = [
        'title' => 'New Book',
        'author' => 'New Author',
        'observation' => 'New Observation',
        'format' => 'Paperback',
        'imgURL' => 'http://example.com/new-image.jpg',
    ];

        $response = $this->actingAs($user)->post(route('create'), $bookData);

        $response->assertStatus(302); 
        $this->assertDatabaseHas('books', $bookData);
    }
}