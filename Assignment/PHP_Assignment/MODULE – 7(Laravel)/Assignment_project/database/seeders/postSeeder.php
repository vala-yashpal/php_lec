<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use DB;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(Faker $faker): void
    {
        for($i=1 ; $i <= 20 ;$i++){
            DB::table('posts')->insert([
                'title' => $faker->name,
                'created_at' =>date("Y-m-d H:i:s"),
            ]);
        }
    } 
}
