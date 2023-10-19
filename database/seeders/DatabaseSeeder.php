<?php

namespace Database\Seeders;

use App\Models\User;

use App\Models\Carts;
use App\Models\ViewBooks;
use App\Models\RatingBuku;
use App\Models\KomentarBuku;
use App\Models\DetailTransaksi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'noktp' => '123456',
            'name' => 'admin',
            'alamat' => 'Jl. ABC',
            'no_telp' => '08911',
            'email' => 'admin@softui.com',
            'password' => Hash::make('secret')
        ]);


        // Seed Books
        $view_books = [
            [
                'isbn' => 'A1',
                'judul' => 'Hitung Jari',
                'idkategori' => 'A',
                'pengarang'=>'Adam Malik',
                'penerbit' => 'Kompas',
                'kota_terbit' => 'Semarang',
                'editor' => 'Henry S.',
                'file_gambar' => 'a.jpg',
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
                'file_gambar' => 'b.jpg',
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
                'file_gambar' => 'c.jpg',
                'stok' => '10',
                'stok_tersedia' => '4',
            ],

        ];

        foreach($view_books as $book){
            ViewBooks::create($book);
        };


        // Seed Transaksi
        $detail_transaksi = [
            [
                'idtransaksi' => '1',
                'idbuku' => 'A1',
                'tgl_kembali'=> '17/08/2020',
                'denda'=> '50000',
                'idpetugas'=> '01',
                'iduser' => '1',

            ],
        ];


        foreach($detail_transaksi as $riwayat){
            DetailTransaksi::create($riwayat);
        }


        // Seed Keranjang
        $keranjang = [
            // [
            //     'isbn' => 'A1',
            //     'judul' => 'Hitung Jari',
            // ],
            [
                'isbn' => 'A2',
                'judul' => 'Beban Hidup',
            ],
        ];


        foreach($keranjang as $cart){
            Carts::create($cart);
        }

        // Seed Review
        $ratings = [
            [
                'isbn' => 'A1',
                'noktp' => '111',
                'skor_rating' => '3',
                'tgl_rating' => '2023/20/10'

            ],
        ];

        foreach($ratings as $rating){
            RatingBuku::create($rating);
        }


        // Seed Review
        $komentars = [
            [
                'isbn' => 'A1',
                'noktp' => '111',
                'komentar' => 'Saya tidak suka buku ini, karena isinya terlalu ringan.',
            ],
            ];

        foreach($komentars as $komentar){
            KomentarBuku::create($komentar);
        }
    }
}
