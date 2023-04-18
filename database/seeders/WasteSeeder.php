<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WasteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wastes')->insert([
            'id' => 1,
            'construction_id' => 1,
            'name' => 'Pedra',
            'amount' => 100,
            'description' => 'pedras a serem retiradas',
            'created_at' => Carbon::now(),
            'updated_at' => NULL
        ]);

        DB::table('wastes')->insert([
            'id' => 2,
            'construction_id' => 1,
            'name' => 'Cascalho',
            'amount' => 120,
            'description' => 'cascalhos a serem retiradas',
            'created_at' => Carbon::now(),
            'updated_at' => NULL
        ]);

        DB::table('wastes')->insert([
            'id' => 3,
            'construction_id' => 1,
            'name' => 'Granito',
            'amount' => 10,
            'description' => 'granitos a serem retiradas',
            'created_at' => Carbon::now(),
            'updated_at' => NULL
        ]);

        DB::table('wastes')->insert([
            'id' => 4,
            'construction_id' => 2,
            'name' => 'Brita',
            'amount' => 367,
            'description' => 'britas a serem retiradas',
            'created_at' => Carbon::now(),
            'updated_at' => NULL
        ]);
        
        
    }
}
