<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected function getNews()
    {
        $faker = Factory::create('ru_RU');

        $newsCount = mt_rand(5,10);
        for($i=0; $i<$newsCount; $i++)
        {
            $data[] = [
                'id' => $i+1,
                'title' => $faker->jobTitle(),
                'author' => $faker->name,
                'description' => $faker->sentence(7),
                'created_at' => now()
            ];
        }

        return $data;
    }

}
