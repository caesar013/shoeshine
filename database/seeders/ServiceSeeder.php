<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => 'Easy Wash',
                'price' => 15000
            ],
            [
                'name' => 'Medium Wash',
                'price' => 20000
            ],
            [
                'name' => 'Hard Wash',
                'price' => 25000
            ],
            [
                'name' => 'Repair',
                'price' => 70000
            ],
            [
                'name' => 'Unyellowing',
                'price' => 30000
            ],
            [
                'name' => 'Repaint',
                'price' => 50000
            ],
            [
                'name' => 'Leather Care',
                'price' => 40000
            ],
            [
                'name' => 'Suede Care',
                'price' => 45000
            ],
            [
                'name' => 'Express',
                'price' => 30000
            ],
        ]);

    }
}
