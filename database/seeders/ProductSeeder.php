<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->insert([
            [
                'name' => 'Oppo mobile',
                'price' => '200',
                'description' => 'A smart phone with 8GB ram and much more features',
                'category' => "mobile",
                'gallery' => "https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/a53/navigation/A53-navigation-blue-v2.png"
            ],
            [
                'name' => 'Panasonic TV',
                'price' => '500',
                'description' => 'A smart tv with much more features',
                'category' => "tv",
                'gallery' => "https://media.shopping-compare.com/files/products/photos/lcd/large/PANTX43HX580E_1.jpg"
            ],
            [
                'name' => 'Sony TV',
                'price' => '510',
                'description' => 'A tv with much more features',
                'category' => "tv",
                'gallery' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTksiTNbsFp4a 7exN8bimOwhzbAZH3IzK046g&usqp=CAU"
            ],
            [
                'name' => 'LG mobile',
                'price' => '200',
                'description' => 'A fridge with much more features',
                'category' => "fridge",
                'gallery' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2Z8WUNpoyYxc0w609tv99wQ0vlCA4ZzJhQ1GgBQt3Zv3lK5UCyvXIsAAAhbZxpjg1CSCbJay7&usqp=CAc"
            ],
        ]);
    }
}
