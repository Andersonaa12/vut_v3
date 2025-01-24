<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class MasterEntriesSeeder extends Seeder
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
            DB::table('master_entries')->insert([
                'brand_id' => 1,
                'master_entrie_type_based_id' => $faker->numberBetween(1, 3),
                'master_entrie_status_id' => $faker->numberBetween(1, 6),
                'master_type_outputs_id' => $faker->numberBetween(1, 3),
                'serie_id' => $faker->numberBetween(1, 20),  
                'subserie_id' => $faker->numberBetween(1, 20),  
                'document_types_id' => $faker->numberBetween(1, 10),  
                'active' => $faker->boolean,
                'code_unique' => $faker->regexify('[A-Za-z0-9]{12}'),
                'response_date' => $faker->date(),
                'check_date' => $faker->date(),
                'approve_date' => $faker->date(),
                'description' => $faker->paragraph,
                'leaf' => $faker->numberBetween(1, 100),
                'annex' => $faker->numberBetween(1, 100),
                'view' => $faker->boolean,
                'signed' => $faker->boolean,
                'authorizes' => $faker->boolean,
                'notification_date' => $faker->date(),
                'created_by' => $faker->numberBetween(1, 10),  
                'updated_by' => $faker->numberBetween(1, 10),  
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime,
                'deleted_at' => null,
            ]);
        }
    }
}
