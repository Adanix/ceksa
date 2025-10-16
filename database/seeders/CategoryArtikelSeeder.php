<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class CategoryArtikelSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $Datacategory = [
            [
                'name' => 'Stunting',
                'slug' => 'Stunting'
            ],
            [
                'name' => 'GAKY',
                'slug' => 'GAKY'
            ],
            [
                'name' => 'Anemia',
                'slug' => 'Anemia'
            ],
            [
                'name' => 'Gizi Lebih',
                'slug' => 'Gizi Lebih'
            ],
        ];
        foreach ($Datacategory as $key => $val) {
            Category::create($val);
        }
    }
}
