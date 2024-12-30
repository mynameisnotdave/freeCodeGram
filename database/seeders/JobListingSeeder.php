<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobListing;

class JobListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobListing::factory()->create([[
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$10,000'
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$40,000'
        ]]);
    }
}
