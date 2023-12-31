<?php

namespace Database\Seeders;
use App\Models\Keranjang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeranjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detail_keranjang = [
            // [
            //     'isbn' => 'A1',
            //     'judul' => 'Hitung Jari',
            // ],
            [
                'isbn' => 'A2',
                'judul' => 'Beban Hidup',
            ],
        ];


        foreach($detail_keranjang as $cart){
            Keranjang::create($cart);
        }
    }
}
