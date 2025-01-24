<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class DocumentSeriesSubseriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $numDocumentTypes = DB::table('document_types')->count();
        $numSeries = DB::table('series')->count();
        $numSubseries = DB::table('subseries')->count();

        $n = 50;  

        for ($i = 0; $i < $n; $i++) {
            DB::table('document_series_subseries')->insert([
                'brand_id' => 1,
                'document_type_id' => $faker->numberBetween(1, $numDocumentTypes),
                'series_id' => $faker->numberBetween(1, $numSeries),
                'subseries_id' => $faker->numberBetween(1, $numSubseries),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'deleted_at' => null,
            ]);
        }
    }
}
