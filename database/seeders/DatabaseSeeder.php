<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Category;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ahmad Jono',
            'email' => 'ahmadj@mail.id',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Tridiktya Putra',
            'email' => 'tridiktya@mail.id',
            'password' => bcrypt('tridik12')
        ]);

        Category::create([
            'category_name' => "Product Design",
            'category_slug' => "product-design"
        ]);


        Category::create([
            'category_name' => "Web Design",
            'category_slug' => "web-design"
        ]);


        Category::create([
            'category_name' => "Graphic Design",
            'category_slug' => "graphic-design"
        ]);

        Category::create([
            'category_name' => "Product Management",
            'category_slug' => "product-management"
        ]);

        Category::create([
            'category_name' => "Web Development",
            'category_slug' => "web-development"
        ]);

        Blog::Create([
            'user_id' => 2,
            'category_id' => 2,
            'title' => "How to Create Modal in Figma",
            'body'=> "This is how you create a modal in Figma, five steps that you have to do are..."
        ]);
    }
}
