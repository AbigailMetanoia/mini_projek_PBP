<?php

namespace Database\Seeders;

use App\Models\ViewBooks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ViewBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
   {

        $view_books = [
        [
            'isbn' => 'A1',
            'judul' => 'Hitung Jari',
            'idkategori' => 'A',
            'pengarang'=>'Adam Malik',
            'penerbit' => 'Kompas',
            'kota_terbit' => 'Semarang',
            'editor' => 'Henry S.',
            'file_gambar' => 'book1.png',
            'stok' => '10',
            'stok_tersedia' => '5',
        ],
        [
            'isbn' => 'A2',
            'judul' => 'Beban Hidup',
            'idkategori' => 'B',
            'pengarang'=>'Satria Matahir',
            'penerbit' => 'Kompas',
            'kota_terbit' => 'Semarang',
            'editor' => 'Dhimas S.',
            'file_gambar' => 'book1.png',
            'stok' => '10',
            'stok_tersedia' => '3',
        ],
        [
            'isbn' => 'A3',
            'judul' => 'Tangan Ada Dua',
            'idkategori' => 'C',
            'pengarang'=>'Angle Helga',
            'penerbit' => 'Kompas',
            'kota_terbit' => 'Semarang',
            'editor' => 'Fayza A.',
            'file_gambar' => 'book1.png',
            'stok' => '10',
            'stok_tersedia' => '4',
        ],

    ];


    foreach($view_books as $book){
        ViewBooks::create($book);
    }
   }
}
