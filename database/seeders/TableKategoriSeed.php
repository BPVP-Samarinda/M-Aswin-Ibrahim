<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableKategoriSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama'=> 'Daging Steak',
                'deskripsi'=>'Daging sapi'
            ],
            [
                'nama'=>'gula',
                'deskripsi'=>'gula pasir'
            ],
            [
                'nama'=> 'Daging Steak',
                'deskripsi'=>'Daging sapi'
            ],
            [
                'nama'=>'gula',
                'deskripsi'=>'gula pasir'
            ],
            [
                'nama'=> 'Daging Steakk',
                'deskripsi'=>'Daging sapi'
            ],
            [
                'nama'=>'gulaa',
                'deskripsi'=>'gula pasir'
            ],
            [
                'nama'=> 'Daging Steakk',
                'deskripsi'=>'Daging sapi'
            ],
            [
                'nama'=>'gula',
                'deskripsi'=>'gula pasir'
            ],
            [
                'nama'=> 'Daging Steak',
                'deskripsi'=>'Daging sapi'
            ],
            [
                'nama'=>'gula',
                'deskripsi'=>'gula pasir'
            ]
            ];
            foreach($data as $item){
                Kategori::create($item);
            }
    }
}
