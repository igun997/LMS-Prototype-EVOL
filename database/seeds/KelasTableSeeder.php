<?php

use Illuminate\Database\Seeder;

class KelasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kelas')->delete();
        
        \DB::table('kelas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'X',
                'rombel_id' => 1,
                'kelas_id' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'XI',
                'rombel_id' => 1,
                'kelas_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'XII',
                'rombel_id' => 1,
                'kelas_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'FARMASI',
                'rombel_id' => 1,
                'kelas_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'TLM',
                'rombel_id' => 1,
                'kelas_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'KEPERAWATAN',
                'rombel_id' => 1,
                'kelas_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'nama' => 'KEPERAWATAN',
                'rombel_id' => 1,
                'kelas_id' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'nama' => 'KEPERAWATAN',
                'rombel_id' => 1,
                'kelas_id' => 3,
            ),
            8 => 
            array (
                'id' => 9,
                'nama' => 'FARMASI',
                'rombel_id' => 1,
                'kelas_id' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'nama' => 'FARMASI',
                'rombel_id' => 1,
                'kelas_id' => 3,
            ),
            10 => 
            array (
                'id' => 11,
                'nama' => 'TLM',
                'rombel_id' => 1,
                'kelas_id' => 2,
            ),
            11 => 
            array (
                'id' => 12,
                'nama' => 'TLM',
                'rombel_id' => 1,
                'kelas_id' => 3,
            ),
        ));
        
        
    }
}