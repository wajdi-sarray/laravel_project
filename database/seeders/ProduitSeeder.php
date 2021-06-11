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
                  "name"=>'Sony Tv',
                  "price"=>"105000",
                  "description"=>"A télé  much more feature",
                  "category"=>"télé",
                  "gallery"=>"https://www.sony.com/image/4dfd9ca48ba82b26b620b9049c099665?fmt=pjpeg&wid=660&hei=660&bgcolor=F1F5F9&bgc=F1F5F9"
              
              
              ]) ;
    }
}
