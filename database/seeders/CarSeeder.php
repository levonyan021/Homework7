<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'mark' => Str::random(10),
            'model' => Str::random(10).'@gmail.com',
            'year' => Str::make('password'),
            'run' => Str::make('password'),
            'color' => Str::make('password'),
            'price' => Str::make('password'),
            'date of creation' => Str::make('password')
            ]);
    }
}
