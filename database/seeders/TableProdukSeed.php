<?php

namespace Database\Seeders;
use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableProdukSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama'=> 'Bolu Peca',
                'deskripsi'=>'Kue Bolu disiram gulmer',
                'harga'=>10_000,
                'stok'=>20,
            ],
            [
                'nama'=>'Sari Pengantin',
                'deskripsi'=>'Temannya amparan tatak',
                'harga'=>15_000,
                'stok'=>50
            ]
            ];
            foreach($data as $item){
                Produk::create($item);
            }
    }
}
