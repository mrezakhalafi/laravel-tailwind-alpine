<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::create([
        //     'name' => 'M Reza Khalafi',
        //     'username' => 'mrezakhalafi',
        //     'email' => 'mrezakhalafi@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // $reza = User::create([
        //     'name' => 'M Reza Khalafi',
        //     'username' => 'mrezakhalafi',
        //     'email' => 'mrezakhalafi@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);


        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);

        // Post::create([
        //     'title' => 'Judul Artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Isi body dari artikel 1'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);

        Post::factory(100)->recycle([
            Category::all(),
            User::all(),
        ])->create();
    }
}
