<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produits')->insert(
            [
                  'name'=>'Samsung A70 ',
                  "price"=>"10000",
                  'description'=>"A smartphone with 16gb ram and much more feature",
                  "category"=>"mobile",
                  "gallery"=>"https://www.tunisianet.com.tn/128071-large/telephone-portable-samsung-galaxy-a70-blanc-sim-orange-offerte-60-go.jpg"
              
              
              ]) ;
    }
}
