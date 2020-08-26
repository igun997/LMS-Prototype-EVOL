<?php

use Illuminate\Database\Seeder;

class RombelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('rombel')->delete();
        
        \DB::table('rombel')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => '2019/2020',
            ),
        ));
        
        
    }
}