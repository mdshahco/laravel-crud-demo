<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new \App\Models\Product([
            'name'=>'product #1',
            'detail'=> 'product #1 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name'=>'product #2',
            'detail'=> 'product #2 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name'=>'product #3',
            'detail'=> 'product #3 details'
        ]);
        $product->save();

        $product = new \App\Models\Product([
            'name'=>'product #4',
            'detail'=> 'product #4 details'
        ]);
        $product->save();
        $product = new \App\Models\Product([
            'name'=>'product #5',
            'detail'=> 'product #5 details'
        ]);
        $product->save();
    }
}
