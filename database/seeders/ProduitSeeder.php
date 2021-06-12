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
                  "name"=>'Samsung S21',
                  "price"=>"105000",
                  "description"=>"A mobile with 16g ram and   much more feature",
                  "category"=>"mobile",
                  "gallery"=>"https://images.samsung.com/africa_fr/smartphones/galaxy-s21/buy/galaxy-s21-phantom-violet.png"
              
              
              ]) ;
    }
}
