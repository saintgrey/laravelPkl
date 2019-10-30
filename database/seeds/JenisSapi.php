<?php

use Illuminate\Database\Seeder;

class JenisSapi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $JenisSapi = [];
        $JenisSapi[] = [
            'nama_jenis' => 'sapi_limusin',
        ];
        $JenisSapi[] = [
            'nama_jenis' => 'sapi_brahman',
        ];
        $JenisSapi[] = [
            'nama_jenis' => 'sapi_simental',
        ];
        $JenisSapi[] = [
            'nama_jenis' => 'sapi_PO',
        ];
        $JenisSapi[] = [
            'nama_jenis' => 'sapi_ongole',
        ];
        $JenisSapi[] = [
            'nama_jenis' => 'sapi_madura',
        ];
        $JenisSapi[] = [
            'nama_jenis' => 'sapi_bali',
        ];

        foreach ($JenisSapi as $row) {
            DB::table('jenis_sapis')->insert([
                'nama_jenis' => $row['nama_jenis'],
               
            ]); 
    }
}
}