<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('products')->insert([
            'category_id' => '1',
            'title' => Str::random(10),
            'name' => Str::random(10),
            'description' => Str::random(10),
            'image' => Str::random(10),
            'price' => Str::random(10),
            'status' => '0',
        ]);
    }
}
