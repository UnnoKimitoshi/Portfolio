<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Record;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 20; $i++) {
            Record::create([
                'name' => "user{$i}",
                'score' => mt_rand(50, 100),
            ]);
        }
    }
}
