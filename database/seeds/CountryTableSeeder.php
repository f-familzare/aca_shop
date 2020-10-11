<?php

use App\Model\City;
use App\Model\Country;
use App\Model\State;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Country::truncate();
        factory(Country::class,7)->create();
        factory(State::class,5)->create();
        factory(City::class,10)->create();
    }
}
