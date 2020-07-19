<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Criando vários usuário de uma vez
        factory(User::class, 10)->create();
        
        //Criando apenas um usuário
        // User::create([  
        //     'name' => 'Gabriel Ripardo',
        //     'email' => 'gts.senna@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);
    }
}
