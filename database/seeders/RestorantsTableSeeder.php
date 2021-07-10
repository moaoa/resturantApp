<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestorantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('resturants')->insert(
            [
                'name' => 'resto 1',
                'email' => 'resto@gmail.com',
                'address' => 'address 1'
            ]
            );
    }
}
