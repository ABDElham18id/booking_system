<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;


class DataSeeder extends Seeder
{
    public function run()
    {
        Hotel::create([
            'name' => 'Hotel A',
            'location' => 'New York',
            'price' => '100',
            'description' => 'A beautiful hotel in the heart of New York City',
        ]);
        // add more data here...
    }
}

