<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class MasterEntrieAssignedUsersSeeder extends Seeder
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
            DB::table('master_entrie_assigned_users')->insert([
                'brand_id' => 1,
                'master_entrie_id' => $faker->numberBetween(1, 50),  
                'user_id' => $faker->numberBetween(1, 10),  
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
