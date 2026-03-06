<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kit;

class KitSeeder extends Seeder
{
    public function run(): void
    {
        Kit::create(['name' => 'StarterKit']);
        Kit::create(['name' => 'Educational Robotics Kit']);
        Kit::create(['name' => 'Kit5']);
    }
}