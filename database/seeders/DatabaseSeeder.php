<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $category1 = new Category();
        $category1->name = "Tecnologia";
        $category1->description = "Productos tecnologicos";

        $category1->save();

        $category2 = new Category();
        $category2->name = "Ropa";
        $category2->description = "Productos de Ropa";

        $category2->save();

        Category::factory(1000)->create();
    }
}
