<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $n = 20;  

        for ($i = 0; $i < $n; $i++) {
            DB::table('series')->insert([
                'brand_id' => 1,
                'unique_code' => $faker->regexify('[A-Za-z0-9]{10}'),
                'name' => $faker->word,
                'description' => $faker->sentence,
                'created_by' => $faker->numberBetween(1, 10),
                'updated_by' => $faker->numberBetween(1, 10),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'deleted_at' => null,
            ]);
        }
    }
}
