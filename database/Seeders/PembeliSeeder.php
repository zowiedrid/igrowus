<?php

use Illuminate\Database\Seeder;
use App\Models\Pembeli;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pembeli::factory()->count(10)->create(); // Buat 10 data pembeli dummy
    }
}