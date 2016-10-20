<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//    	$this->call(ImagesSeeder::class);
//    	$this->call(ProductSeeder::class);
//    	$this->call(CarSeeder::class);
//    	$this->call(ColorSeeder::class);
//    	$this->call(CarColorSeeder::class);
        $this->call(ThanhVienSeeder::class);
    }
}

/**
* 
*/
class ImagesSeeder extends Seeder
{
	public function run(){
		DB::table('images')->insert([
			['name' => 'images_name_1.png' , 'product_id' => 1],
			['name' => 'images_name_2.png' , 'product_id' => 1],
			['name' => 'images_name_3.png' , 'product_id' => 2],
			['name' => 'images_name_4.png' , 'product_id' => 2],
			['name' => 'images_name_5.png' , 'product_id' => 1],
			]);
	}
}
class ProductSeeder extends Seeder
{
	public function run(){
		DB::table('products')->insert([
			['name' => 'Quan Tennis' , 'price' => 3578275 , 'cate_id' => 3],
			['name' => 'Quan Soc' , 'price' => 3578275 , 'cate_id' => 6],
			['name' => 'Quan Tennis' , 'price' => 3578275 , 'cate_id' => 4],
			['name' => 'Ao Boi' , 'price' => 3578275 , 'cate_id' => 2],
			['name' => 'Quan Dai' , 'price' => 3578275 , 'cate_id' => 3],
			]);
	}
}

class CarSeeder extends Seeder
{
	public function run(){
		DB::table('cars')->insert([
			['name' => 'BMV' , 'price' => 3578275 ],
			['name' => 'Ferrari' , 'price' => 5345364 ],
			['name' => 'Huawei' , 'price' => 424242 ],
			['name' => 'Guard' , 'price' => 232342 ],
			['name' => 'Atok' , 'price' => 1311313 ]
			]);
	}
}
class ColorSeeder extends Seeder
{
	public function run(){
		DB::table('colors')->insert([
			['name' => 'Black'],
			['name' => 'White'],
			['name' => 'Red'],
			['name' => 'Purple'],
			['name' => 'Rose']
			]);
	}
}
class CarColorSeeder extends Seeder
{
	public function run(){
		DB::table('car_colors')->insert([
			['car_id' => 1 , 'color_id' => 2],
			['car_id' => 2 , 'color_id' => 4],
			['car_id' => 3 , 'color_id' => 2],
			['car_id' => 4 , 'color_id' => 1],
			['car_id' => 1 , 'color_id' => 2],
			]);
	}
}

class ThanhVienSeeder extends Seeder
{
    public function run(){
        DB::table('thanh_viens')->insert([
            ['user' => "Thanh" , 'pass' => Hash::make(888888) , 'level' => 10],
            ['user' => "Luong" , 'pass' => Hash::make(888888) , 'level' => 4],
            ['user' => "Anh" , 'pass' => Hash::make(888888) , 'level' => 3],
            ['user' => "Dinh" , 'pass' => Hash::make(888888) , 'level' => 2],
            ['user' => "Atk" , 'pass' => Hash::make(888888) , 'level' => 9],
            ['user' => "Cdk" , 'pass' => Hash::make(888888) , 'level' => 3],
        ]);
    }
}