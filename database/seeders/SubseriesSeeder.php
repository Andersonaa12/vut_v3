<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class SubseriesSeeder extends Seeder
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
            DB::table('subseries')->insert([
                'brand_id' => 1,
                'subserie_support_id' => $faker->numberBetween(1, 10),
                'unique_code' => $faker->regexify('[A-Za-z0-9]{10}'),
                'description' => $faker->sentence,
                'management_file_time' => $faker->numberBetween(1, 5),
                'central_file_time' => $faker->numberBetween(1, 5),
                'subserie_final_disposition_id' => $faker->numberBetween(1, 10),
                'observations' => $faker->paragraph,
                'active' => $faker->boolean,
                'created_by' => $faker->numberBetween(1, 10),
                'updated_by' => $faker->numberBetween(1, 10),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'deleted_at' => null,
            ]);
        }
    }
}
