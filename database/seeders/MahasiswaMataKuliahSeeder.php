<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'mahasiswa_id' => '2141720001',
                'matakuliah_id' => '3',
                'nilai' => 'A'
            ],
            [
                'mahasiswa_id' => '2141720006',
                'matakuliah_id' => '1',
                'nilai' => 'B'
            ],
            [
                'mahasiswa_id' => '2141720022',
                'matakuliah_id' => '2',
                'nilai' => 'B+'
            ],
            [
                'mahasiswa_id' => '2141720075',
                'matakuliah_id' => '4',
                'nilai' => 'A'
            ],
        ];
        DB::table('mahasiswa_matakuliah')->insert($data);
    }
}