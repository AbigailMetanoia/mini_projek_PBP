<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\ViewBooks;

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

    }
}
