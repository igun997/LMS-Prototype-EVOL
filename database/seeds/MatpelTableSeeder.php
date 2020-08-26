<?php

use Illuminate\Database\Seeder;

class MatpelTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('matpel')->delete();
        
        \DB::table('matpel')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'bahasa indonesia',
                'kelas_id' => 1,
                'nip' => '715104001',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'bahasa indonesia',
                'kelas_id' => 2,
                'nip' => '715104001',
            ),
            2 => 
            array (
                'id' => 3,
                'nama' => 'bahasa indonesia',
                'kelas_id' => 3,
                'nip' => '715104001',
            ),
            3 => 
            array (
                'id' => 4,
                'nama' => 'matematika',
                'kelas_id' => 2,
                'nip' => '715205001',
            ),
            4 => 
            array (
                'id' => 5,
                'nama' => 'matematika',
                'kelas_id' => 1,
                'nip' => '715204001',
            ),
            5 => 
            array (
                'id' => 6,
                'nama' => 'matematika',
                'kelas_id' => 3,
                'nip' => '715204001',
            ),
            6 => 
            array (
                'id' => 7,
                'nama' => 'Bahasa Inggris',
                'kelas_id' => 1,
                'nip' => '715202001',
            ),
            7 => 
            array (
                'id' => 8,
                'nama' => 'Bahasa Inggris',
                'kelas_id' => 3,
                'nip' => '715104002',
            ),
            8 => 
            array (
                'id' => 9,
                'nama' => 'Bahasa Inggris',
                'kelas_id' => 2,
                'nip' => '715104002',
            ),
            9 => 
            array (
                'id' => 10,
                'nama' => 'pabp Islam',
                'kelas_id' => 2,
                'nip' => '715203002',
            ),
            10 => 
            array (
                'id' => 11,
                'nama' => 'pabp islam',
                'kelas_id' => 3,
                'nip' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'nama' => 'pabd',
                'kelas_id' => 1,
                'nip' => '715304001',
            ),
            12 => 
            array (
                'id' => 13,
                'nama' => 'FARKOL',
                'kelas_id' => 4,
                'nip' => '715105006',
            ),
            13 => 
            array (
                'id' => 14,
                'nama' => 'Bahasa Inggris',
                'kelas_id' => 1,
                'nip' => '715202001',
            ),
            14 => 
            array (
                'id' => 15,
                'nama' => 'BK',
                'kelas_id' => 1,
                'nip' => '715302001',
            ),
            15 => 
            array (
                'id' => 16,
                'nama' => 'KIMIA FARMASI',
                'kelas_id' => 9,
                'nip' => '715103005',
            ),
            16 => 
            array (
                'id' => 17,
                'nama' => 'MTK',
                'kelas_id' => 2,
                'nip' => '715205001',
            ),
            17 => 
            array (
                'id' => 18,
                'nama' => 'PKK',
                'kelas_id' => 1,
                'nip' => '715101004',
            ),
            18 => 
            array (
                'id' => 19,
                'nama' => 'AD FAR',
                'kelas_id' => 10,
                'nip' => '715105006',
            ),
            19 => 
            array (
                'id' => 20,
                'nama' => 'MTK',
                'kelas_id' => 3,
                'nip' => '715204001',
            ),
            20 => 
            array (
                'id' => 21,
                'nama' => 'KIMIA FARMASI',
                'kelas_id' => 10,
                'nip' => '715103005',
            ),
            21 => 
            array (
                'id' => 22,
                'nama' => 'UUK',
                'kelas_id' => 4,
                'nip' => '001',
            ),
            22 => 
            array (
                'id' => 23,
                'nama' => 'FISIKA',
                'kelas_id' => 1,
                'nip' => '001',
            ),
            23 => 
            array (
                'id' => 24,
                'nama' => 'K3LH',
                'kelas_id' => 4,
                'nip' => '003',
            ),
            24 => 
            array (
                'id' => 25,
                'nama' => 'AD FAR',
                'kelas_id' => 9,
                'nip' => '715105006',
            ),
            25 => 
            array (
                'id' => 26,
                'nama' => 'P. Resep',
                'kelas_id' => 1,
                'nip' => '002',
            ),
            26 => 
            array (
                'id' => 27,
                'nama' => 'Bahasa Inggris',
                'kelas_id' => 3,
                'nip' => '715104002',
            ),
            27 => 
            array (
                'id' => 28,
                'nama' => 'PKK',
                'kelas_id' => 2,
                'nip' => '715101004',
            ),
            28 => 
            array (
                'id' => 29,
                'nama' => 'BK',
                'kelas_id' => 1,
                'nip' => '715302001',
            ),
            29 => 
            array (
                'id' => 30,
                'nama' => 'PABD',
                'kelas_id' => 3,
                'nip' => '715203002',
            ),
            30 => 
            array (
                'id' => 31,
                'nama' => 'SBK',
                'kelas_id' => 1,
                'nip' => '715203003',
            ),
            31 => 
            array (
                'id' => 32,
                'nama' => 'SEJ INDO',
                'kelas_id' => 1,
                'nip' => '715102001',
            ),
            32 => 
            array (
                'id' => 33,
                'nama' => 'KIMIA',
                'kelas_id' => 1,
                'nip' => '715104003',
            ),
            33 => 
            array (
                'id' => 34,
                'nama' => 'Bahasa Sunda',
                'kelas_id' => 1,
                'nip' => '715302001',
            ),
            34 => 
            array (
                'id' => 35,
                'nama' => 'PKN',
                'kelas_id' => 1,
                'nip' => '715102003',
            ),
            35 => 
            array (
                'id' => 36,
                'nama' => 'PABD',
                'kelas_id' => 2,
                'nip' => '715203002',
            ),
            36 => 
            array (
                'id' => 37,
                'nama' => 'PKN',
                'kelas_id' => 2,
                'nip' => '715102003',
            ),
            37 => 
            array (
                'id' => 38,
                'nama' => 'FARKOL',
                'kelas_id' => 9,
                'nip' => '002',
            ),
            38 => 
            array (
                'id' => 39,
                'nama' => 'FARKOL',
                'kelas_id' => 10,
                'nip' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'nama' => 'PKK',
                'kelas_id' => 3,
                'nip' => '715101004',
            ),
            40 => 
            array (
                'id' => 41,
                'nama' => 'IL Resep',
                'kelas_id' => 4,
                'nip' => '715203001',
            ),
            41 => 
            array (
                'id' => 42,
                'nama' => 'BIOLOGI',
                'kelas_id' => 1,
                'nip' => '715105002',
            ),
            42 => 
            array (
                'id' => 43,
                'nama' => 'FARKOG',
                'kelas_id' => 4,
                'nip' => '001',
            ),
            43 => 
            array (
                'id' => 44,
                'nama' => 'P. Resep',
                'kelas_id' => 1,
                'nip' => '715203001',
            ),
            44 => 
            array (
                'id' => 45,
                'nama' => 'FARKOG',
                'kelas_id' => 9,
                'nip' => '001',
            ),
            45 => 
            array (
                'id' => 46,
                'nama' => 'SIM DIG',
                'kelas_id' => 1,
                'nip' => '715304001',
            ),
            46 => 
            array (
                'id' => 47,
                'nama' => 'PJOK',
                'kelas_id' => 1,
                'nip' => '715101005',
            ),
            47 => 
            array (
                'id' => 48,
                'nama' => 'IL Resep',
                'kelas_id' => 2,
                'nip' => '715203001',
            ),
            48 => 
            array (
                'id' => 49,
                'nama' => 'PKN',
                'kelas_id' => 3,
                'nip' => '715101003',
            ),
            49 => 
            array (
                'id' => 50,
                'nama' => 'P. Resep',
                'kelas_id' => 10,
                'nip' => '002',
            ),
            50 => 
            array (
                'id' => 51,
                'nama' => 'PRAMUKA',
                'kelas_id' => 1,
                'nip' => '715203002',
            ),
            51 => 
            array (
                'id' => 52,
                'nama' => 'PJOK',
                'kelas_id' => 2,
                'nip' => '715101005',
            ),
            52 => 
            array (
                'id' => 53,
                'nama' => 'ANFIS',
                'kelas_id' => 5,
                'nip' => '715105004',
            ),
            53 => 
            array (
                'id' => 54,
                'nama' => 'DMLKL',
                'kelas_id' => 5,
                'nip' => '715105001',
            ),
            54 => 
            array (
                'id' => 55,
                'nama' => 'HEMA',
                'kelas_id' => 11,
                'nip' => '715103003',
            ),
            55 => 
            array (
                'id' => 56,
                'nama' => 'K3LH',
                'kelas_id' => 5,
                'nip' => '003',
            ),
            56 => 
            array (
                'id' => 57,
                'nama' => 'LKD',
                'kelas_id' => 5,
                'nip' => '715103003',
            ),
            57 => 
            array (
                'id' => 58,
                'nama' => 'IMUN',
                'kelas_id' => 11,
                'nip' => '715105001',
            ),
            58 => 
            array (
                'id' => 59,
                'nama' => 'K Klinik',
                'kelas_id' => 11,
                'nip' => '715105001',
            ),
            59 => 
            array (
                'id' => 60,
                'nama' => 'MIKRO',
                'kelas_id' => 12,
                'nip' => '715103003',
            ),
            60 => 
            array (
                'id' => 61,
                'nama' => 'HISTO',
                'kelas_id' => 11,
                'nip' => '715104003',
            ),
            61 => 
            array (
                'id' => 62,
                'nama' => 'K Klinik',
                'kelas_id' => 12,
                'nip' => '715103003',
            ),
            62 => 
            array (
                'id' => 63,
                'nama' => 'HEMA',
                'kelas_id' => 12,
                'nip' => '715103003',
            ),
            63 => 
            array (
                'id' => 64,
                'nama' => 'IMUN',
                'kelas_id' => 12,
                'nip' => '715103003',
            ),
            64 => 
            array (
                'id' => 65,
                'nama' => 'IMUN',
                'kelas_id' => 11,
                'nip' => '715103003',
            ),
            65 => 
            array (
                'id' => 66,
                'nama' => 'MIKRO',
                'kelas_id' => 11,
                'nip' => '715105001',
            ),
            66 => 
            array (
                'id' => 67,
                'nama' => 'K3LH',
                'kelas_id' => 6,
                'nip' => '003',
            ),
            67 => 
            array (
                'id' => 68,
                'nama' => 'KDTK',
                'kelas_id' => 7,
                'nip' => '715103004',
            ),
            68 => 
            array (
                'id' => 69,
                'nama' => 'KDM',
                'kelas_id' => 7,
                'nip' => '715103006',
            ),
            69 => 
            array (
                'id' => 70,
                'nama' => 'ANFIS',
                'kelas_id' => 6,
                'nip' => '715105004',
            ),
            70 => 
            array (
                'id' => 71,
                'nama' => 'KESPRO',
                'kelas_id' => 7,
                'nip' => '715105004',
            ),
            71 => 
            array (
                'id' => 72,
                'nama' => 'KDTK',
                'kelas_id' => 8,
                'nip' => '715103004',
            ),
            72 => 
            array (
                'id' => 73,
                'nama' => 'TKM',
                'kelas_id' => 8,
                'nip' => '715103006',
            ),
            73 => 
            array (
                'id' => 74,
                'nama' => 'IKM',
                'kelas_id' => 6,
                'nip' => '715103004',
            ),
            74 => 
            array (
                'id' => 75,
                'nama' => 'KDK',
                'kelas_id' => 6,
                'nip' => '715102002',
            ),
            75 => 
            array (
                'id' => 76,
                'nama' => 'KDPO',
                'kelas_id' => 7,
                'nip' => '715103004',
            ),
            76 => 
            array (
                'id' => 77,
                'nama' => 'P3D',
                'kelas_id' => 7,
                'nip' => '715102002',
            ),
            77 => 
            array (
                'id' => 78,
                'nama' => 'KEP JIWA',
                'kelas_id' => 7,
                'nip' => '715103004',
            ),
            78 => 
            array (
                'id' => 79,
                'nama' => 'KDM',
                'kelas_id' => 7,
                'nip' => '715102002',
            ),
            79 => 
            array (
                'id' => 80,
                'nama' => 'KEP JIWA',
                'kelas_id' => 8,
                'nip' => '715103004',
            ),
            80 => 
            array (
                'id' => 81,
                'nama' => 'KESPRO',
                'kelas_id' => 8,
                'nip' => '715103006',
            ),
            81 => 
            array (
                'id' => 82,
                'nama' => 'KOMKEP',
                'kelas_id' => 6,
                'nip' => '715105004',
            ),
            82 => 
            array (
                'id' => 83,
                'nama' => 'TKM',
                'kelas_id' => 7,
                'nip' => '715103006',
            ),
            83 => 
            array (
                'id' => 84,
                'nama' => 'IP',
                'kelas_id' => 8,
                'nip' => '715105004',
            ),
            84 => 
            array (
                'id' => 85,
                'nama' => 'IP',
                'kelas_id' => 7,
                'nip' => '715105004',
            ),
            85 => 
            array (
                'id' => 86,
                'nama' => 'KOM',
                'kelas_id' => 8,
                'nip' => '715102002',
            ),
            86 => 
            array (
                'id' => 87,
                'nama' => 'P3D',
                'kelas_id' => 8,
                'nip' => '715102002',
            ),
            87 => 
            array (
                'id' => 88,
                'nama' => 'Test',
                'kelas_id' => 1,
                'nip' => '715101007',
            ),
            88 => 
            array (
                'id' => 89,
                'nama' => 'Test2',
                'kelas_id' => 2,
                'nip' => '715101007',
            ),
            89 => 
            array (
                'id' => 90,
                'nama' => 'Test3',
                'kelas_id' => 3,
                'nip' => '715101007',
            ),
            90 => 
            array (
                'id' => 91,
                'nama' => 'Test 4',
                'kelas_id' => 4,
                'nip' => '715101007',
            ),
            91 => 
            array (
                'id' => 92,
                'nama' => 'Test5',
                'kelas_id' => 7,
                'nip' => '715101007',
            ),
            92 => 
            array (
                'id' => 93,
                'nama' => 'ppkn',
                'kelas_id' => 1,
                'nip' => '715304001',
            ),
            93 => 
            array (
                'id' => 94,
                'nama' => 'ppkn',
                'kelas_id' => 2,
                'nip' => '715304001',
            ),
            94 => 
            array (
                'id' => 95,
                'nama' => 'farkol',
                'kelas_id' => 10,
                'nip' => '002',
            ),
            95 => 
            array (
                'id' => 96,
                'nama' => 'farkol',
                'kelas_id' => 4,
                'nip' => '002',
            ),
            96 => 
            array (
                'id' => 97,
                'nama' => 'farkol',
                'kelas_id' => 9,
                'nip' => '002',
            ),
            97 => 
            array (
                'id' => 98,
                'nama' => 'pratikum resep',
                'kelas_id' => 9,
                'nip' => '002',
            ),
            98 => 
            array (
                'id' => 99,
                'nama' => 'k3lh',
                'kelas_id' => 6,
                'nip' => '715105002',
            ),
            99 => 
            array (
                'id' => 100,
                'nama' => 'IL RESEP',
                'kelas_id' => 10,
                'nip' => '715203001',
            ),
            100 => 
            array (
                'id' => 101,
                'nama' => 'PABD KRIS',
                'kelas_id' => 2,
                'nip' => '715104005',
            ),
            101 => 
            array (
                'id' => 102,
                'nama' => 'PABD KRIS',
                'kelas_id' => 3,
                'nip' => '715104005',
            ),
            102 => 
            array (
                'id' => 103,
            'nama' => 'TO BAHASA INGGRIS (XII)',
                'kelas_id' => 3,
                'nip' => '715104002',
            ),
            103 => 
            array (
                'id' => 104,
            'nama' => 'TO BAHASA INDONESIA (XII)',
                'kelas_id' => 3,
                'nip' => '715104001',
            ),
            104 => 
            array (
                'id' => 105,
            'nama' => 'TO MATEMATIKA (XII)',
                'kelas_id' => 3,
                'nip' => '715204001',
            ),
            105 => 
            array (
                'id' => 106,
            'nama' => 'TO KEPERAWATAN (XII)',
                'kelas_id' => 3,
                'nip' => '715102002',
            ),
            106 => 
            array (
                'id' => 107,
                'nama' => 'farmakognosi',
                'kelas_id' => 10,
                'nip' => '001',
            ),
            107 => 
            array (
                'id' => 109,
                'nama' => 'ETIKUM',
                'kelas_id' => 1,
                'nip' => '715106003',
            ),
            108 => 
            array (
                'id' => 110,
                'nama' => 'KDM',
                'kelas_id' => 8,
                'nip' => '715106004',
            ),
            109 => 
            array (
                'id' => 111,
                'nama' => 'TKM',
                'kelas_id' => 7,
                'nip' => '715106004',
            ),
            110 => 
            array (
                'id' => 112,
                'nama' => 'TKM',
                'kelas_id' => 7,
                'nip' => '715106004',
            ),
            111 => 
            array (
                'id' => 113,
                'nama' => 'TKM',
                'kelas_id' => 7,
                'nip' => '715106004',
            ),
            112 => 
            array (
                'id' => 114,
                'nama' => 'PKN',
                'kelas_id' => 1,
                'nip' => '715106005',
            ),
            113 => 
            array (
                'id' => 115,
                'nama' => 'PKN',
                'kelas_id' => 2,
                'nip' => '715106006',
            ),
            114 => 
            array (
                'id' => 116,
                'nama' => 'HISTOLOGI',
                'kelas_id' => 11,
                'nip' => '715106008',
            ),
            115 => 
            array (
                'id' => 117,
                'nama' => 'BAHASA INGGRIS_XI',
                'kelas_id' => 2,
                'nip' => '715206002',
            ),
            116 => 
            array (
                'id' => 118,
                'nama' => 'BAHASA INGGRIS_XII',
                'kelas_id' => 3,
                'nip' => '715206002',
            ),
            117 => 
            array (
                'id' => 119,
                'nama' => 'farmagoknosi X',
                'kelas_id' => 4,
                'nip' => '001',
            ),
            118 => 
            array (
                'id' => 120,
                'nama' => 'DMLKL',
                'kelas_id' => 5,
                'nip' => '715106002',
            ),
            119 => 
            array (
                'id' => 121,
                'nama' => 'Kimia',
                'kelas_id' => 1,
                'nip' => '715106002',
            ),
            120 => 
            array (
                'id' => 122,
                'nama' => 'US kelas XII_ B. Inggris',
                'kelas_id' => 3,
                'nip' => '715206002',
            ),
            121 => 
            array (
                'id' => 123,
                'nama' => 'US kelas XII_ B. Indonesia',
                'kelas_id' => 3,
                'nip' => '715104001',
            ),
            122 => 
            array (
                'id' => 124,
                'nama' => 'US kelas XII_ Matematika',
                'kelas_id' => 3,
                'nip' => '715204001',
            ),
            123 => 
            array (
                'id' => 125,
                'nama' => 'US kelas XII_ PPKN',
                'kelas_id' => 3,
                'nip' => '715101003',
            ),
            124 => 
            array (
                'id' => 126,
                'nama' => 'US kelas XII_ PABP',
                'kelas_id' => 3,
                'nip' => '715203002',
            ),
            125 => 
            array (
                'id' => 127,
                'nama' => 'US kelas XII_ Teori Kejuruan TLM',
                'kelas_id' => 3,
                'nip' => '715103003',
            ),
            126 => 
            array (
                'id' => 128,
                'nama' => 'US kelas XII_ Teori Kejuruan Farmasi',
                'kelas_id' => 3,
                'nip' => '002',
            ),
            127 => 
            array (
                'id' => 129,
                'nama' => 'US kelas XII_ Teori Kejuruan Keperawatan',
                'kelas_id' => 8,
                'nip' => '715102002',
            ),
            128 => 
            array (
                'id' => 130,
                'nama' => 'Bahasa Inggris',
                'kelas_id' => 2,
                'nip' => '715101003',
            ),
            129 => 
            array (
                'id' => 131,
                'nama' => 'Fisika',
                'kelas_id' => 1,
                'nip' => '715106002',
            ),
            130 => 
            array (
                'id' => 132,
                'nama' => 'KDM',
                'kelas_id' => 7,
                'nip' => '715106004',
            ),
        ));
        
        
    }
}