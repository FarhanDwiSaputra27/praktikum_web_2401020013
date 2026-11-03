<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public static function contoh(): array
    {
        return [
            [
                'kode' => 'BK001',
                'judul' => 'Teknologi Informasi dalam Dunia Maritim'
            ],
            [
                'kode' => 'BK002',
                'judul' => 'Sistem Informasi Geografis Kelautan'
            ],
            [
                'kode' => 'BK003',
                'judul' => 'Dasar-Dasar Oseanografi'
            ],
            [
                'kode' => 'BK004',
                'judul' => 'Internet of Things untuk Pemantauan Laut'
            ],
        ];
    }
}