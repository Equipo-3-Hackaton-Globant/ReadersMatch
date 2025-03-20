<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(5)->create([

        ]);

        $user = User::find(1);

        Book::factory()->create([
            "user_id" => $user->id,
            "publisher" => $user->name,
            "imgURL" => "images/book1.jpg"
        ]);

        Book::factory()->create([
            "user_id" => $user->id,
            "publisher" => $user->name,
            "imgURL" => "images/book3.jpg"
        ]);

        Book::factory()->create([
            "user_id" => $user->id,
            "publisher" => $user->name,
            "imgURL" => "images/book5.jpg"
        ]);

        $user = User::find(2);
    
        Book::factory()->create([
            "user_id" => $user->id,
            "publisher" => $user->name,
            "imgURL" => "images/book2.jpg"
        ]);

        $user = User::find(3);
    
        Book::factory()->create([
            "user_id" => $user->id,
            "publisher" => $user->name,
            "imgURL" => "images/book1.jpg"
        ]);
    
        Book::factory()->create([
            "user_id" => $user->id,
            "publisher" => $user->name,
            "imgURL" => "images/book4.jpg"
        ]);
    
        $user = User::find(4);

        Book::factory(2)->create([
            "user_id" => $user->id,
            "publisher" => $user->name,
            "imgURL" => "images/book2.jpg"
        ]);

        $user = User::find(5);

        Book::factory()->create([
            "user_id" => $user->id,
            "publisher" => $user->name,
            "imgURL" => "images/book5.jpg"
        ]);

        Book::factory()->create([
            "user_id" => $user->id,
            "publisher" => $user->name,
            "imgURL" => "images/book3.jpg"
        ]);

        Book::factory()->create([
            "user_id" => $user->id,
            "publisher" => $user->name,
            "imgURL" => "images/book1.jpg"
        ]);

        Book::factory()->create([
            "user_id" => $user->id,
            "publisher" => $user->name,
            "imgURL" => "images/book4.jpg"
        ]);

        Book::factory()->create([
            "user_id" => $user->id,
            "publisher" => $user->name,
            "imgURL" => "images/book2.jpg"
        ]);

        $user = User::find(1);
        $user->favoriteBooks()->attach([1, 8, 7, 4]);

        $user = User::find(2);
        $user->favoriteBooks()->attach([5, 2, 10, 1]);

        $user = User::find(3);
        $user->favoriteBooks()->attach([3, 4, 12, 11]);

        $user = User::find(4);
        $user->favoriteBooks()->attach([8, 7, 6, 9]);

        $user = User::find(5);
        $user->favoriteBooks()->attach([6, 7, 9, 11]);
    }
}
