<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class TableMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 5; $i++) { 
            $nim = 185411133+$i;
            $mahasiswa[] = [
                'nim'           => (string)$nim,
                'nama'          => 'Andi Susanto '. Str::random(10),
                'alamat'        => 'Lampung'. Str::random(10),
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' =>  (new Carbon())->modify('-240 months')->subDays($i),
                'agama'         =>  'islam',
                'jurusan_id'    =>  rand(1,5)
            ];
        }
        DB::table('mahasiswa')->insert($mahasiswa);
    }
}
