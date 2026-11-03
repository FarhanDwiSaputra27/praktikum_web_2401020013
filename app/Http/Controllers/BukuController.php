<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BukuController extends Controller
{
    public function index(Request $request): View
    {
        $cari = trim((string) $request->query('cari', ''));

        $buku = array_values(array_filter(
            Buku::contoh(),
            function ($item) use ($cari) {
                return $cari === '' ||
                    stripos($item['judul'], $cari) !== false;
            }
        ));

        return view('buku.index', [
            'buku' => $buku,
            'cari' => $cari,
        ]);
    }

    public function show(string $kode): View
    {
        foreach (Buku::contoh() as $item) {
            if ($item['kode'] === $kode) {
                return view('buku.show', [
                    'buku' => $item,
                ]);
            }
        }

        abort(404);
    }
}
