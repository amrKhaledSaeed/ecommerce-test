<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;
class usertableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach (range(1, 1000)as $index) {
            DB::table('users')->insert([
            'name'=>$faker->name,
            'email'=>$faker->email,
            'password'=>bcrypt('secret')
        ]);
        }
    }
}











