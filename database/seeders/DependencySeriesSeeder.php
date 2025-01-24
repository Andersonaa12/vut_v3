<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class DependencySeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $n = 50;  

        for ($i = 0; $i < $n; $i++) {
            DB::table('dependency_series')->insert([
                'brand_id' => 1,
                'dependency_id' => $faker->numberBetween(1, 20),
                'series_id' => $faker->numberBetween(1, 20),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'deleted_at' => null,
            ]);
        }
    }
}
