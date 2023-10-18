<?php

namespace Database\Seeders;

use App\Models\Riwayat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiwayatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detail_transaksi = [
            [
                 'idtransaksi' => '1',
                 'idbuku' => 'A1',
                 'tgl_kembali'=> '17/08/2020',
                 'denda'=> '50000',
                 'idpetugas'=> '01',

            ],
        ];


        foreach($detail_transaksi as $riwayat){
            Riwayat::create($riwayat);
        }
    }
}
