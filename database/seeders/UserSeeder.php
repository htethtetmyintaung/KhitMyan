<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'TTAYE',
            'email' => 'ttaye@gmail.com',
            'password' => 'ttaye123!',
        ]);

        User::factory()
        ->count(50)
        ->hasPosts(1)
        ->create();

        $this->call([
            UserSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
        ]);
    }
    
}
