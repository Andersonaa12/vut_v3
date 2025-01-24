<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class SubserieSupportsSeeder extends Seeder
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
            DB::table('subserie_supports')->insert([
                'brand_id' => 1,
                'name' => $faker->word,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'deleted_at' => null,
            ]);
        }
    }
}
