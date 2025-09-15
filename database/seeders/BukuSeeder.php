<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buku = [
            ['judul' => 'The Great Gatsby', 'pengarang' => 'F. Scott Fitzgerald', 'tahun_terbit' => 1925, 'created_at' => now(), 'updated_at' => now()],
            ['judul' => 'To Kill a Mockingbird', 'pengarang' => 'Harper Lee', 'tahun_terbit' => 1960, 'created_at' => now(), 'updated_at' => now()],
            ['judul' => '1984', 'pengarang' => 'George Orwell', 'tahun_terbit' => 1949, 'created_at' => now(), 'updated_at' => now()],
            ['judul' => 'Pride and Prejudice', 'pengarang' => 'Jane Austen', 'tahun_terbit' => 1813, 'created_at' => now(), 'updated_at' => now()],
            ['judul' => 'The Catcher in the Rye', 'pengarang' => 'J.D. Salinger', 'tahun_terbit' => 1951, 'created_at' => now(), 'updated_at' => now()],
            ['judul' => 'The Hobbit', 'pengarang' => 'J.R.R. Tolkien', 'tahun_terbit' => 1937, 'created_at' => now(), 'updated_at' => now()],
            ['judul' => 'Fahrenheit 451', 'pengarang' => 'Ray Bradbury', 'tahun_terbit' => 1953, 'created_at' => now(), 'updated_at' => now()]
        ];

        // OR $buku = [
    //                 [
    //                 'judul' => 'The Great Gatsby',
    //                 'pengarang' => 'F. Scott Fitzgerald',
    //                 'tahun_terbit' => 1925,
    //                 'created_at' => now(),
    //                 'updated_at' => now()
    //                 ]
    // ];

        DB::table('buku')->insert($buku);
    }
}
