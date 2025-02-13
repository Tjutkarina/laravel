<?php

namespace Database\Seeders;
use Illuminate\support\facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //db::table('users')->insert([
            //"name" => str::random(10),
            //"email" => str::random(10). '@test.com',
            //"passowrd" => Hash::make('admin12345')
        //]);
        //
        $faker = Faker::create(locale: 'id_ID');
        for($i=1; $i <=5 ; $i++){
        db::table(table: 'users')->insert(values: [
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => Hash::make(value: 'admin123')
        ]);
    }
}

}