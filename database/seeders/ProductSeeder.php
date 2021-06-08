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
        'name'=>'Oppo mobile',
        "price"=>"300","description"=>"A smartphone with 8gb ram and much more feature",
        "category"=>"mobile",
        "gallery"=>"https://c1.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2020/09/oppo-reno-4-z-frandroid-2020.png?resize=580,580"
    
    ],[
        'name'=>'LED télé',
        "price"=>"700","description"=>"A smart tv with much more feature",
        "category"=>"télé",
        "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSX8IYefkzLJzmDn7rtu1dkkVjNN2LXr1XEYw&usqp=CAU"
    
    
    
    ]) ;






    }
}
