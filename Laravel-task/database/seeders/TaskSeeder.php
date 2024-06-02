<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create(
            [
                'name' => 'Bahasa Inggris',
                'deadline' => '2024-05-29',
                'description' => 'Mengerjakakan soal Bahasa Inggris chapter 3 di buku LKS halaman 30-35',
                'status' => 'Belum Selesai'
            ]
        );

        Task::factory(5)->create();
    }
}
