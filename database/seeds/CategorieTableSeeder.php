<?php

use Illuminate\Database\Seeder;
use App\Categorie;
class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->delete();
        Categorie::create(['name'=>'Adesivo']);
        Categorie::create(['name'=>'Arte A5']);
        Categorie::create(['name'=>'Arte A4']);
        Categorie::create(['name'=>'Arte A3']);
        Categorie::create(['name'=>'Banner']);
        Categorie::create(['name'=>'Display']);
        Categorie::create(['name'=>'Outdoor']);
        Categorie::create(['name'=>'Post']);
         
                   
        
    }
}
