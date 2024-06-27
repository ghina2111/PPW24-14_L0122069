<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lip;

class LipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Lip::factory()->count(10)->create();
    }
}
