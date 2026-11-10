<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Kategori;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $kategori = Kategori::where('nama', 'Pemrograman')->firstOrFail();

        Buku::firstOrCreate(
            ['kode' => 'BK001'],
            ['judul' => 'Dasar PHP', 'kategori_id' => $kategori->id]
        );

        Buku::firstOrCreate(
            ['kode' => 'BK002'],
            ['judul' => 'Belajar Laravel', 'kategori_id' => $kategori->id]
        );
    }
}