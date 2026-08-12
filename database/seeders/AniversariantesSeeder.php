<?php

namespace Database\Seeders;

use App\Models\Aniversariante;
use Illuminate\Database\Seeder;

class AniversariantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aniversariante::factory()->create([
            'nome' => 'Test User',
        ]);
    }
}
