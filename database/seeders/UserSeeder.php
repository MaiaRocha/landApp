<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Maia',
            'email' => 'maia.rocha1992@gmail.com',
            'password' => Hash::make('password'),
            'cpf' => '00000000001',
            'birthday' => '1992-07-07',
            'telephone' => '41988135723',
            'created_at' => Carbon::now(),
            'updated_at' => NULL
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Juliana',
            'email' => 'ju.rocha1992@gmail.com',
            'password' => Hash::make('password'),
            'cpf' => '00000000002',
            'birthday' => '1992-07-04',
            'telephone' => '71991696351',
            'created_at' => Carbon::now(),
            'updated_at' => NULL
        ]);

    }
}
