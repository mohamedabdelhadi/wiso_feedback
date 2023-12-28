<?php

namespace Database\Seeders;
use App\Models\Ksnation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KsnationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $f = Faker::create();
            $s = new Ksnation;
            $s->expressions = "Happy";
            $s->age = $f->age;
            $s->gender = "Male";
            $s->created_at = Carbon::$f->date->format('Y M d');
            $s->save();
    }
}
