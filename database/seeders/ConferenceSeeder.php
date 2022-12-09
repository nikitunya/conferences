<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Ramsey\Uuid\Type\Integer;

class ConferenceSeeder extends Seeder
{
    public function run()
    {
        DB::table('conferences')->insert([
            'title' => Str::random(10),
            'description' => Str::random(20),
            'conference_date' => Carbon::parse('2000-01-01'),
            'address' => Str::random(15),
            'participants' => Integer::random(),
        ],[
                'title' => Str::random(20),
                'description' => Str::random(30),
                'conference_date' => Carbon::parse('2022-01-01'),
                'address' => Str::random(15),
                'participants' => Integer::random(),
            ]
        );
    }
}
