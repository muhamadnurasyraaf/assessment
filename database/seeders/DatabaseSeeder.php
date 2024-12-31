<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    private $categories = [
        'Work',
        'School',
        'Sport',
        'House'
    ];
    public function run(): void
    {

        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }

        User::factory()->create([
            'name' => 'asyraaf',
            'email' => 'masyraaf14@gmail.com',
            'password' => 'asyraaf123'
        ]);
    }
}
