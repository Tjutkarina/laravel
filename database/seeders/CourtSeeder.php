<?php

namespace Database\Seeders;
use Illuminate\support\facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use faker\Factory as Faker;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=1; $i <=5 ; $i++){
        db::table(table: 'Courts')->insert(values: [
            'count_type_id' => $faker->numberBetween(1,2),
            'name' => 'lapangan'.$i,
            'price' => $faker->numberBetween(10000,200000)
        ]);
    }
}
}