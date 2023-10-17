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
            'author' => 'Adam Malik',
            'title' => 'Hitung Jari',
            'price' => '49.567',

        ],
        [
            'isbn' => 'A2',
            'author' => 'lucia Dewi',
            'title' => 'Beban dan Tawa',
            'price' => '59.767',

        ],
        [
            'isbn' => 'A3',
            'author' => 'Tehhila Alaska',
            'title' => 'Tangis',
            'price' => '67.167',

        ],
        [
            'isbn' => 'A4',
            'author' => 'Sisila Puspa Dewi',
            'title' => 'Bersinggah Sejenak',
            'price' => '19.347',

        ],
        [
            'isbn' => 'A5',
            'author' => 'Lisa Putri Dewi',
            'title' => 'Kuncup Mawar Merah',
            'price' => '159.367',

        ],
        [
            'isbn' => 'A6',
            'author' => 'Tompi Simorangkir',
            'title' => 'Kehangatan Teh Kopi',
            'price' => '39.467',

        ],
        [
            'isbn' => 'A7',
            'author' => 'Gibran Sadam Permana',
            'title' => 'Keluarga Cemara',
            'price' => '79.367',

        ],
        [
            'isbn' => 'A8',
            'author' => 'Herry Setiawan',
            'title' => 'Belajar Positif',
            'price' => '49.767',

        ],
        [
            'isbn' => 'A9',
            'author' => 'Juan Evan',
            'title' => 'Atomic Habits',
            'price' => '189.267',

        ],
        [
            'isbn' => 'A10',
            'author' => 'Hotman Brazil',
            'title' => 'Ice Cold',
            'price' => '189.467',

        ],

    ];


    foreach($view_books as $book){
        ViewBooks::create($book);
    }
   }
}
