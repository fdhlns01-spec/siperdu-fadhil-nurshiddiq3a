<?php
 
namespace Database\Seeders;
use Illuminate\Database\Seeder;
 
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Urutan penting: kategori harus ada sebelum buku.
        // UserSeeder tidak bergantung pada tabel lain, jadi boleh di awal.
        $this->call([
            UserSeeder::class,
            KategoriSeeder::class,
            BukuSeeder::class,
        ]);
    }
}