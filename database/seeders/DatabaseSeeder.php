<?php


namespace Database\Seeders;
use Faker\Factory as Faker;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

         $this->call([
            UserSeeder::class,
            CourtSeeder::class,
            CourttypeSeeder::class,
            Transactions:: class


        ]);
    }
}
