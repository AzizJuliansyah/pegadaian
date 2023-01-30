<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('siswa')->insert([
            'nama'=>'ani',
            'nomor_induk'=>'1008',
            'alamat'=>'bantul',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama'=>'gus',
            'nomor_induk'=>'1009',
            'alamat'=>'jakarta',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert([
            'nama' =>'salim',
            'nomor_induk'=> '1010',
            'alamat'=>'subang',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
    }
}
