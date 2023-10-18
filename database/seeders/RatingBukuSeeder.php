<?php

namespace Database\Seeders;
use App\Models\RatingBuku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'isbn' => 'A1',
                'noktp' => '111',
                'skor_rating' => '3',
                'komentar' => 'Keren!',

            ],
        ];

        foreach($reviews as $review){
            RatingBuku::create($review);
        }
    }


}
