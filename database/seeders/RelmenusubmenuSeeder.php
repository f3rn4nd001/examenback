<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Relmenusubmenu;

class RelmenusubmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $relmenusubmenu = new Relmenusubmenu;
        $relmenusubmenu-> ecodSubmenu = 1;
        $relmenusubmenu-> ecodMenu  = 1;
        $relmenusubmenu-> ecodController  = 1;
        $relmenusubmenu->save();
    }
}
