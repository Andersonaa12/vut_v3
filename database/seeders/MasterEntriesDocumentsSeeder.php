<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class MasterEntriesDocumentsSeeder extends Seeder
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
            DB::table('master_entries_documents')->insert([
                'brand_id' => 1,
                'name' => $faker->word,
                'description' => $faker->sentence,
                'path' => $faker->filePath,
                'type' => $faker->fileExtension,
                'size' => $faker->numberBetween(1000, 10000),
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
