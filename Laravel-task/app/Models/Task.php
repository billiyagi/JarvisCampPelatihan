<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected static $tasks = [
        [
            'id' => 1,
            'name' => 'Bahasa Inggris',
            'deadline' => '2024-05-29',
            'description' => 'Mengerjakakan soal Bahasa Inggris chapter 3 di buku LKS halaman 30-35',
            'status' => 'Belum Selesai'
        ],
        [
            'id' => 2,
            'name' => 'Matematika',
            'deadline' => '2024-05-30',
            'description' => 'Mengerjakan soal-soal matematika di buku PR halaman 50-55',
            'status' => 'In Progress'
        ],
        [
            'id' => 3,
            'name' => 'Fisika',
            'deadline' => '2024-05-31',
            'description' => 'Mengerjakan soal-soal fisika di buku PR halaman 30-35',
            'status' => 'In Progress'
        ],
    ];

    static function getTasks()
    {
        return self::$tasks;
    }

    static function getTaskById($id)
    {
        $tasks = self::getTasks();
        $task = array_filter($tasks, fn($task) => $task['id'] == $id);

        return $task;
    }
}
