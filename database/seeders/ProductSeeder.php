<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 0; $i <= 20; $i++) {
            DB::table('products')->insert([
                'kode' => '000'.$i,
                'nama' => $faker->word,
                'harga' => $faker->randomNumber(6, false),
                'desc' => 'pcs'
            ]);
        }
    }
}
