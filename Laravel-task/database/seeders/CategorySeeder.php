<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(
            [
                'name' => 'Pendidikan',
                'description' => 'Kategori ini berisi tugas-tugas yang berhubungan dengan pendidikan',
                'slug' => 'pendidikan'
            ]
        );

        Category::create(
            [
                'name' => 'Pekerjaan',
                'description' => 'Kategori ini berisi tugas-tugas yang berhubungan dengan pekerjaan',
                'slug' => 'pekerjaan'
            ]
        );

        Category::create(
            [
                'name' => 'Keuangan',
                'description' => 'Kategori ini berisi tugas-tugas yang berhubungan dengan keuangan',
                'slug' => 'keuangan'
            ]
        );

        Category::create(
            [
                'name' => 'Kesehatan',
                'description' => 'Kategori ini berisi tugas-tugas yang berhubungan dengan kesehatan',
                'slug' => 'kesehatan'
            ]
        );

        Category::create(
            [
                'name' => 'Hiburan',
                'description' => 'Kategori ini berisi tugas-tugas yang berhubungan dengan hiburan',
                'slug' => 'hiburan'
            ]
        );

        Category::factory(5)->create();
    }
}
