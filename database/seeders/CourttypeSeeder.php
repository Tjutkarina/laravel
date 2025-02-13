<?php

namespace Database\Seeders;
use Illuminate\support\facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use faker\Factory as Faker;


class CourttypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1; $i <=2 ; $i++){
        db::table(table: 'Court_types')->insert(values: [
            'name' => 'type'.$i,
           
        ]);
    }
    }
}
