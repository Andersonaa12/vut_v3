<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class DocumentTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $n = 10;  

        for ($i = 0; $i < $n; $i++) {
            DB::table('document_types')->insert([
                'brand_id' => 1,
                'route' => $faker->url,
                'name' => $faker->word,
                'description' => $faker->sentence,
                'priority' => $faker->randomElement(['1', '2', '3', '4']),
                'document_response_types_id' => $faker->numberBetween(1, 4),
                'time_response' => $faker->numberBetween(1, 30),
                'allow_date_extension' => $faker->boolean,
                'active' => $faker->boolean,
                'physical_response' => $faker->boolean,
                'locked' => $faker->boolean,
                'created_by' => $faker->numberBetween(1, 10),
                'updated_by' => $faker->numberBetween(1, 10),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'deleted_at' => null,
            ]);
        }
    }
}
