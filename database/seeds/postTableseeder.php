<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;
class postTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach (range(1, 100)as $index) {
            DB::table('posts')->insert([
            'title'=>$faker->sentence(5),
            'body'=>$faker->paragraph(4)
        ]);
        }
    }
}





