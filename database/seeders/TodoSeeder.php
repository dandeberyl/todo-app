<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodoSeeder extends Seeder
{
    protected $model = Todo::class;

    public function run(): void
    {
        Todo::factory()->count(5)->create();
    }
}
