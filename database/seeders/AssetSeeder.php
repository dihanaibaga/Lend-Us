<?php

namespace Database\Seeders;

use App\Models\Asset;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Asset::create([
            'nama_barang'=>'laboratorium',
            'unit_id'=>'1',
            'jumlah'=>1,
            'status'=>'tersedia '
        ]);
    }
}
