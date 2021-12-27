<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        Storage::deleteDirectory('products');
        Storage::makeDirectory('products');

        Storage::deleteDirectory('articles');
        Storage::makeDirectory('articles');

        $this->call(UserSeeder::class);
        Product::factory(50)->create();
        Article::factory(50)->create();
    }
}
