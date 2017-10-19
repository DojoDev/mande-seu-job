<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Gabi',
            'email' => 'gabriela@agenciavirtude.com.br',
            'password' => bcrypt('12wqasxz!QAZ'),
        ]);
    }
}
