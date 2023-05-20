<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            [
                'name' => 'Fikril H Ramadhani',
                'username' => 'caesar',
                'email' => 'fikrilha@gmail.com',
                'password' => Hash::make('antares13'),
                'role' => 0,
                'gender' => 'm',
            ],
            [
                'name' => 'Fikril H Ramadhani',
                'username' => 'fikril',
                'email' => 'fikrilha099@gmail.com',
                'password' => Hash::make('antares13'),
                'role' => 1,
                'gender' => 'm',
            ],
        ]);
    }
}
