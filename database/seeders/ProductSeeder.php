<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('products')->insert(
  [
        'name'=>'Samsung A12 ',
        "price"=>"20000",
        'description'=>"A smartphone with 16gb ram and much more feature",
        "category"=>"mobile",
        "gallery"=>"https://www.samsungtunisie.tn/4395-large_default/samsung-galaxy-a12-prix-tunisie.jpg"
    
    
    ]) ;






    }
}
