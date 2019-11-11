<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name' => 'Categoría de Prueba 1',
        	'slug' => 'categoria-de-prueba-1'
        ]);

        Category::create([
            'name' => 'Categoría de Prueba 2',
            'slug' => 'categoria-de-prueba-2'
        ]);

        Category::create([
            'name' => 'Categoría de Prueba 3',
            'slug' => 'categoria-de-prueba-3'
        ]);
    }
}
