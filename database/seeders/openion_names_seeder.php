<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\openion_name;
class openion_names_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        openion_name::create([
            'name' => 'good', 
        ]);
        openion_name::create([
            'name' => 'average', 
        ]);
        openion_name::create([
            'name' => 'bad', 
        ]);
    }
}
