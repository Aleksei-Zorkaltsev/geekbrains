<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getFakerData());
    }
    protected function getFakerData()
    {
        $faker = Factory::create();
        $data = [];
        $dataCount = 10;

        for($i = 0; $i < $dataCount; $i++){
            $data[] = [
                'title' => $faker->colorName(),
                'description' => $faker->text(rand(50,100)),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        return $data;
    }
}
