<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        App\User::create([
            'name' => 'Jhonathan Contreras',
            'email' => 'jjct@gmail.com',
            'password' => bcrypt('123456')
        ]);
        
        factory(App\Post::class,24)->create();
    }
}
