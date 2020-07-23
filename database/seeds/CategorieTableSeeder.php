<?php

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Categories::create([  
        //     'name' => 'Smartphone'
        // ]);

        Categories::create([  
            'name' => 'Tv',                
        ]);
    }
}
