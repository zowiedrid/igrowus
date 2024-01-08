<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Ilham Fadhilah',
                'email' => 'wtwdawe3@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'admin',
            ],
            [
                'name' => 'Athari Zaki',
                'email' => 'zaki@pembeli.com',
                'password' => bcrypt('12345678'),
                'role' => 'pembeli',
            ],
            [
                'name' => 'Rezka Mulya',
                'email' => 'rezka@penjual.com',
                'password' => bcrypt('12345678'),
                'role' => 'penjual',
            ]
        ];

        foreach ($userData as $key => $val) {
            \App\Models\User::create($val);
        }
    }
}
