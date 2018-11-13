<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker\Factory::create();

        for ($i=0; $i<10; $i++){
            DB::table('cities')->insert([
              'name'=>$faker->unique()->city,
            ]);
        }
    }
}
