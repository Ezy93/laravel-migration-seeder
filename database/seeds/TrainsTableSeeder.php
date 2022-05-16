<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $newTrain = new Train();
            $newTrain->company = $faker->word();
            $newTrain->departure_station = $faker->word();
            $newTrain->arrival_station = $faker->word();
            $newTrain->departure_date = $faker->dateTimeBetween('-1 year', '+1 year');;
            $newTrain->arrival_date = $faker->dateTimeBetween('-1 year', '+1 year');;
            $newTrain->train_code = strval($faker->numerify('train-####'));
            $newTrain->number_of_carriages = $faker->numberBetween(5,13);
            $newTrain->isInTime = $faker->boolean();
            $newTrain->isDelete = $faker->boolean();
            $newTrain->save();
        }
    }
}
