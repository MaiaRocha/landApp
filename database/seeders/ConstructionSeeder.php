<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConstructionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('constructions')->insert([
            'id' => 1,
            'user_id' => 1,
            'name' => 'Galpão logístico ',
            'land_size' => '200',
            'budget' => '400',
            'description' => 'Construção de galpão no centro industrial',
            'created_at' => Carbon::now(),
            'updated_at' => NULL
        ]);

        DB::table('constructions')->insert([
            'id' => 2,
            'user_id' => 1,
            'name' => 'Casa de alto padrão',
            'land_size' => '100',
            'budget' => '300',
            'description' => 'Construção de casa com design moderno',
            'created_at' => Carbon::now(),
            'updated_at' => NULL
        ]);
    }
}
