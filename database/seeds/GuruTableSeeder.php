<?php

use Illuminate\Database\Seeder;

class GuruTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('guru')->delete();
        
        \DB::table('guru')->insert(array (
            0 => 
            array (
                'nip' => '001',
                'nama' => 'Ulyati Ulfah, S.Farm., Apt., M.Farm.',
                'alamat' => NULL,
                'no_hp' => '086',
                'email' => 'test@s.com',
                'password' => '001',
                'dibuat' => '2019-11-29 02:36:06',
            ),
            1 => 
            array (
                'nip' => '002',
                'nama' => 'Rizki Satrianto, S.Farm., Apt.',
                'alamat' => NULL,
                'no_hp' => '0',
                'email' => 'indra@gmail.com',
                'password' => '002',
                'dibuat' => '2019-11-29 02:36:38',
            ),
            2 => 
            array (
                'nip' => '003',
                'nama' => 'Adellya',
                'alamat' => NULL,
                'no_hp' => '0',
                'email' => 'tes@gs',
                'password' => '003',
                'dibuat' => '2019-11-29 02:43:45',
            ),
            3 => 
            array (
                'nip' => '715101001',
                'nama' => 'Faruk Rasyid, S.E.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715101001',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            4 => 
            array (
                'nip' => '715101002',
                'nama' => 'Ridwan Nugraha, S.Kom.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715101002',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            5 => 
            array (
                'nip' => '715101003',
                'nama' => 'Rizki Zaskia Hilmy',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715101003',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            6 => 
            array (
                'nip' => '715101004',
                'nama' => 'Leni Deniarni, S.Pd.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715101004',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            7 => 
            array (
                'nip' => '715101005',
                'nama' => 'Fauzan Rahimi, SP.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715101005',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            8 => 
            array (
                'nip' => '715101006',
                'nama' => 'Fathia Rizki, S.S.T, M.Tr., Keb.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715101006',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            9 => 
            array (
                'nip' => '715101007',
                'nama' => 'Iga Retia Mufti, S.S.T., M.Kes.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715101007',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            10 => 
            array (
                'nip' => '715101008',
                'nama' => 'Liawati, S.S.T., M.Kes.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715101008',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            11 => 
            array (
                'nip' => '715102001',
                'nama' => 'Iman Rohiman, A.Md.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715102001',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            12 => 
            array (
                'nip' => '715102002',
                'nama' => 'M. Iqbal Sutisna, S.Kep., Ners.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715102002',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            13 => 
            array (
                'nip' => '715102003',
                'nama' => 'Meilirianta, S.Kep, Ners., M.Kes.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715102003',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            14 => 
            array (
                'nip' => '715103003',
                'nama' => 'Irma Novyanti, A.Md., AK.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715103003',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            15 => 
            array (
                'nip' => '715103004',
                'nama' => 'Ahmad Arifin, S.Kep., Ners.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715103004',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            16 => 
            array (
                'nip' => '715103005',
                'nama' => 'Farhan Baehaki, S.Pd., M.Pd.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715103005',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            17 => 
            array (
                'nip' => '715103006',
                'nama' => 'Nurul Bayanti, A.Md.,Keb.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715103006',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            18 => 
            array (
                'nip' => '715104001',
                'nama' => 'Agus Julian, S.Pd.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715104001',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            19 => 
            array (
                'nip' => '715104002',
                'nama' => 'Muhammad Akbar Sumadipraja',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715104002',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            20 => 
            array (
                'nip' => '715104003',
                'nama' => 'Ira Primasari, S.Pd., M.Si.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715104003',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            21 => 
            array (
                'nip' => '715104005',
                'nama' => 'Maria Awaldina Dua  B., S.S.T., M.Kes.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715104005',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            22 => 
            array (
                'nip' => '715105001',
                'nama' => 'Taufik Hidayat, A.Md.A.K.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715105001',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            23 => 
            array (
                'nip' => '715105002',
                'nama' => 'Nidya Ikha Putri, S.ST., M. Biomed.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715105002',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            24 => 
            array (
                'nip' => '715105003',
                'nama' => 'Meina Hapiana, S.Tr., Keb.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715105003',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            25 => 
            array (
                'nip' => '715105004',
                'nama' => 'Rizki Gumilang Pahlawan, S.Kep., Ners.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715105004',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            26 => 
            array (
                'nip' => '715105005',
                'nama' => 'Dr. Purwaeni, S.Si., Apt., M.Si.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715105005',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            27 => 
            array (
                'nip' => '715105006',
                'nama' => 'Sendy Triansyah, S.Farm., Apt., M.M.R.S',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715105006',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            28 => 
            array (
                'nip' => '715106002',
                'nama' => 'Mawar  Puspawarna A.Md A.K',
                'alamat' => NULL,
                'no_hp' => '0000',
                'email' => 'Mawar@gmail.com',
                'password' => '715106002',
                'dibuat' => '2020-02-29 05:52:18',
            ),
            29 => 
            array (
                'nip' => '715106003',
                'nama' => 'Lulu Mamlukah R., S.Tr., M.Keb',
                'alamat' => 'Haha',
                'no_hp' => '123456',
                'email' => 'lulu@gmail.com',
                'password' => '715106003',
                'dibuat' => '2020-02-29 06:10:26',
            ),
            30 => 
            array (
                'nip' => '715106004',
                'nama' => 'Silva Dwi Rahmizani, S.S.T, M.K.M',
                'alamat' => 'cihanjuang',
                'no_hp' => '123453',
                'email' => '@gmail',
                'password' => '715106004',
                'dibuat' => '2020-02-29 06:14:47',
            ),
            31 => 
            array (
                'nip' => '715106005',
                'nama' => 'Ervianty Aprilia, S.Keb, Bd',
                'alamat' => 'gggg',
                'no_hp' => '0565622323',
                'email' => '@gmail',
                'password' => '715106005',
                'dibuat' => '2020-02-29 06:15:40',
            ),
            32 => 
            array (
                'nip' => '715106006',
                'nama' => 'Mira Miraturrofi\'ah, S.S.T., M.Kes',
                'alamat' => 'hhhh',
                'no_hp' => '12345',
                'email' => '@gmail',
                'password' => '715106006',
                'dibuat' => '2020-02-29 06:16:38',
            ),
            33 => 
            array (
                'nip' => '715106007',
                'nama' => 'Oryza Tri Novita, S.S.T., M.Kes',
                'alamat' => 'klklllk',
                'no_hp' => '30303',
                'email' => 'admin',
                'password' => '715106007',
                'dibuat' => '2020-02-29 06:17:28',
            ),
            34 => 
            array (
                'nip' => '715106008',
                'nama' => 'Liah Kodariah, S.Pd., M.Si.',
                'alamat' => 'fffsfs',
                'no_hp' => '0565622323',
                'email' => 'admin',
                'password' => '715106008',
                'dibuat' => '2020-02-29 06:18:28',
            ),
            35 => 
            array (
                'nip' => '715202001',
                'nama' => 'Maura Bunga Aprilia, S.Pd.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715202001',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'nip' => '715203001',
                'nama' => 'Dicky Andrian, S.Farm., Apt.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715203001',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'nip' => '715203002',
                'nama' => 'Asep Tarmedi, S,PdI.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715203002',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            38 => 
            array (
                'nip' => '715203003',
                'nama' => 'Prisma Denensi Purnomo, S.Pd.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715203003',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            39 => 
            array (
                'nip' => '715204001',
                'nama' => 'Ade Sujana, S.Pd.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715204001',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            40 => 
            array (
                'nip' => '715205001',
                'nama' => 'Anggia Rahayu Biharja, S.Pd., M.Kom.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715205001',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            41 => 
            array (
                'nip' => '715206002',
                'nama' => 'Rendi Andi Kusumah, S.Hum.',
                'alamat' => 'bbbb',
                'no_hp' => '123536',
                'email' => 'admin',
                'password' => '715206002',
                'dibuat' => '2020-02-29 06:20:49',
            ),
            42 => 
            array (
                'nip' => '715301001',
                'nama' => 'Deta Kusuma, A.Md.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715301001',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            43 => 
            array (
                'nip' => '715302001',
                'nama' => 'Elis Adawiyah, S.Pd.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715302001',
                'dibuat' => '0000-00-00 00:00:00',
            ),
            44 => 
            array (
                'nip' => '715304001',
                'nama' => 'Egie Sugiyanto, S.Kom.',
                'alamat' => NULL,
                'no_hp' => NULL,
                'email' => NULL,
                'password' => '715304001',
                'dibuat' => '0000-00-00 00:00:00',
            ),
        ));
        
        
    }
}