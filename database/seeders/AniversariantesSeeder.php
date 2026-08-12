<?php
use App\Models\Aniversariante;
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AniversariantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::factory()->create([
            'name' => 'Test User',
            'aniversario' => ,
        ]);
    }
}
