<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                "kategori" => "Horror"
            ],
            [
                "kategori" => "Animasi"
            ],
            [
                "kategori" => "Drama"
            ],
            [
                "kategori" => "Fantasi"
            ],
            [
                "kategori" => "Romansa"
            ],
            [
                "kategori" => "Komedi"
            ],
            [
                "kategori" => "Aksi"
            ]
        ];
        Kategori::insert($kategori);
    }
}
