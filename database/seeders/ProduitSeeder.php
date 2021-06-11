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
                  'name'=>'Samsung A50 ',
                  "price"=>"19000",
                  'description'=>"A smartphone with 16gb ram and much more feature",
                  "category"=>"mobile",
                  "gallery"=>"https://c2.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2019/04/samsung-galaxy-a50-2019-frandroid-france-packshot-png.png?resize=580,580"
              
              
              ]) ;
    }
}
