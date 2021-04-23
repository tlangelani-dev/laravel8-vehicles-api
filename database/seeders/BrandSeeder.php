<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->truncate();

        $data = [
            ['Audi', 'Audi vehicles', 'audi.png'],
            ['BMW', 'BMW vehicles', 'bmw.png'],
            ['Ford', 'Ford vehicles', 'ford.png'],
            ['KIA', 'KIA vehicles', 'kia.png'],
            ['Mercedes-Benz', 'Mercedes-Benz vehicles', 'mercedes-benz.png'],
            ['Volvo', 'Volvo vehicles', 'volvo.png'],
            ['VW', 'VW vehicles', 'vw.png'],
        ];

        foreach ($data as $brand) {
            $now = Carbon::now();
            DB::table('brands')->insert([
                'title' => $brand[0],
                'description' => $brand[1],
                'logo' => $brand[2],
                'active' => true,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
