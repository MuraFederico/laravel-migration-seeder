<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->sentence(2);
            $newTrain->arrival_staion = $faker->sentence(2);
            $newTrain->departure_time = $faker->dateTimeThisYear();
            $newTrain->arrival_time = $faker->dateTimeThisYear();
            $newTrain->train_code = $faker->randomNumber(4, true);
            $newTrain->cart_number = $faker->randomNumber(2, false);
            $newTrain->is_in_time = $faker->numberBetween(0, 1);
            $newTrain->is_cancelled = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
