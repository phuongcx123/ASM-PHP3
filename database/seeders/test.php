<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class test extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 7; $i++) {
            $data  = [
                 'name' => fake()->text('7'),
                 'thumbnail_img' => 'theme/client/assets/images/category/cate1-'.$i.'.jpg' ,
                 'created_at' => now(),
                 'updated_at' => now(),
            ]  ;
            DB::table('categories') -> insert($data);
        }
    }
}
