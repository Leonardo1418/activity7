<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Ejecutamos los seeders específicos primero
        $this->call([
            UserSeeder::class,
            KitSeeder::class,
        ]);

        // 2. Usamos el factory para crear 100 cursos automáticamente
        Course::factory(100)->create();
    }
}
