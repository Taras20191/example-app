<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['Name' => Str::random(15), 'Model' => Str::random(15), 'Price' => '33'],
            ['Name' => Str::random(15), 'Model' => Str::random(15), 'Price' => '155'],
            ['Name' => Str::random(15), 'Model' => 'Redmi9c', 'Price' => '125'],
            ['Name' => Str::random(15), 'Model' => 'KG509', 'Price' => '175'],
            ['Name' => 'Alcatel', 'Model' => Str::random(7), 'Price' => '155'],
            ['Name' => 'Meizu', 'Model' => Str::random(10), 'Price' => '125'],
            ['Name' => 'Nokia', 'Model' => Str::random(4), 'Price' => '175'],

        ]);
        DB::table('categories')->insert([
            ['name' => Str::random(12), 'description' => Str::random(10)],
            ['name' => Str::random(12), 'description' => Str::random(10)],
            ['name' => Str::random(12), 'description' => Str::random(10)],
            ['name' => Str::random(12), 'description' => Str::random(10)],
            ['name' => Str::random(12), 'description' => Str::random(10)],
        ]);

        DB::table('orders')->insert([
            ['order_number' => Str::random(10), 'order_name' => 'bying', 'order_date' => "1993/08/22", 'customer' => 'John_Colings'],
            ['order_number' => Str::random(10), 'order_name' => 'bying', 'order_date' => "1993/08/22", 'customer' => 'John_Colings'],
            ['order_number' => Str::random(10), 'order_name' => 'treding', 'order_date' => "1993/08/22", 'customer' => 'John_Colings'],
        ]);

    }
}
