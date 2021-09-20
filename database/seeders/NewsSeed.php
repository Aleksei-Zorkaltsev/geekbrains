<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getFakerData());
    }

    protected function getFakerData()
    {
        $faker = Factory::create();
        $data = [];
        $dataCount = 10;

        for($i = 0; $i < $dataCount; $i++){
            $data[] = [
                'category_id' => 1,
                'title' => $faker->sentence(mt_rand(3,7)),
                'author' => $faker->lastName(),
                'description' => $faker->text(rand(50,100)),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        return $data;
    }
}
