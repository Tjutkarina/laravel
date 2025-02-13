<?php

namespace Database\Seeders;
use Illuminate\support\facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use faker\Factory as Faker;

class Transactions extends Seeder{
 /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $faker = Faker::create();
      for ($i=1; $i <=5; $i++) {

       db::table('transactions')->insert([
        'user_id' =>$faker->numberBetween(1,5),
        'court_id' => $faker->numberBetween(1,5),
        'name' => $faker->name,
        'addres'=> $faker->address,
        'phone' => $faker->phoneNumber,
        'date' => $faker->date(),
        'starttime' => $faker->time(),
        'endtime' => $faker->time(),
        'costume' => $faker->boolean(),
        'shoes' =>$faker->boolean(),
        'total' =>$faker->randomDigit(),
        'grandtotal' => $faker->numberBetween(1000, 10000),
        'paytotal' => $faker->randomNumber(6,true)
       ]);

       
    }
}
}
// public function down(): void
// {
//     Schema::dropIfExists('court_types');
// };