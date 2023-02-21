<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bitcorreos;

class BitcorreosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bitcorreos = new Bitcorreos;
        $bitcorreos-> tcorreo = 'admin@gmail.com';
        $bitcorreos-> tpassword = 'admin';
        $bitcorreos->save();
    }
}
