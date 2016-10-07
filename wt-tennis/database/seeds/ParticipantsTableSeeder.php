<?php

use Illuminate\Database\Seeder;

class ParticipantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/*Untuk Grup Futsal*/
         $participants = array(
            array(
              'nama_tim' => 'Arsenal',
              'logo_tim' => 'images/participant/1/arsenal.png',
              'no_hp' => '085673829399',
              'warna_kostum' => 'Merah Putih',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '1',
              'user_id'      => '1',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Manchester United',
              'logo_tim' => 'images/participant/1/mu.png',
              'no_hp' => '08567782190232',
              'warna_kostum' => 'Merah Hitam',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '1',
              'user_id'      => '2',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'FC Barcelona',
              'logo_tim' => 'images/participant/1/barca.png',
              'no_hp' => '08567782190312',
              'warna_kostum' => 'Merah Kuning',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '1',
              'user_id'      => '3',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'AJAX Amsterdam',
              'logo_tim' => 'images/participant/1/ajax.png',
              'no_hp' => '08137782190232',
              'warna_kostum' => 'Orange Putih',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '1',
              'user_id'      => '4',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Chelsea',
              'logo_tim' => 'images/participant/1/chelsea.png',
              'no_hp' => '085673829399',
              'warna_kostum' => 'Biru Putih',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '1',
              'user_id'      => '5',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Tottenham',
              'logo_tim' => 'images/participant/1/tottenham.png',
              'no_hp' => '08567782192122',
              'warna_kostum' => 'Hitam Putih',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '1',
              'user_id'      => '6',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Real Madrid',
              'logo_tim' => 'images/participant/1/madrid.png',
              'no_hp' => '08567711190245',
              'warna_kostum' => 'Hitam Emas',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '1',
              'user_id'      => '7',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Bayern Munchen',
              'logo_tim' => 'images/participant/1/munchen.png',
              'no_hp' => '08567782121232',
              'warna_kostum' => 'Biru Hitam',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '1',
              'user_id'      => '8',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Juventus',
              'logo_tim' => 'images/participant/1/juventus.png',
              'no_hp' => '08567782111132',
              'warna_kostum' => 'Putih Hitam',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '1',
              'user_id'      => '9',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Arsenal',
              'logo_tim' => 'images/participant/1/arsenal.png',
              'no_hp' => '085673829399',
              'warna_kostum' => 'Merah Putih',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '2',
              'user_id'      => '1',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Manchester United',
              'logo_tim' => 'images/participant/1/mu.png',
              'no_hp' => '08567782190232',
              'warna_kostum' => 'Merah Hitam',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '2',
              'user_id'      => '2',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'FC Barcelona',
              'logo_tim' => 'images/participant/1/barca.png',
              'no_hp' => '08567782190312',
              'warna_kostum' => 'Merah Kuning',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '2',
              'user_id'      => '3',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'AJAX Amsterdam',
              'logo_tim' => 'images/participant/1/ajax.png',
              'no_hp' => '08137782190232',
              'warna_kostum' => 'Orange Putih',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '2',
              'user_id'      => '4',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Chelsea',
              'logo_tim' => 'images/participant/1/chelsea.png',
              'no_hp' => '085673829399',
              'warna_kostum' => 'Biru Putih',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '2',
              'user_id'      => '5',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Tottenham',
              'logo_tim' => 'images/participant/1/tottenham.png',
              'no_hp' => '08567782192122',
              'warna_kostum' => 'Hitam Putih',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '2',
              'user_id'      => '6',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Real Madrid',
              'logo_tim' => 'images/participant/1/madrid.png',
              'no_hp' => '08567711190245',
              'warna_kostum' => 'Hitam Emas',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '2',
              'user_id'      => '7',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Bayern Munchen',
              'logo_tim' => 'images/participant/1/munchen.png',
              'no_hp' => '08567782121232',
              'warna_kostum' => 'Biru Hitam',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '2',
              'user_id'      => '8',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Juventus',
              'logo_tim' => 'images/participant/1/juventus.png',
              'no_hp' => '08567782111132',
              'warna_kostum' => 'Putih Hitam',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '2',
              'user_id'      => '9',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Arsenal',
              'logo_tim' => 'images/participant/1/arsenal.png',
              'no_hp' => '085673829399',
              'warna_kostum' => 'Merah Putih',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '3',
              'user_id'      => '1',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Manchester United',
              'logo_tim' => 'images/participant/1/mu.png',
              'no_hp' => '08567782190232',
              'warna_kostum' => 'Merah Hitam',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '3',
              'user_id'      => '2',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'FC Barcelona',
              'logo_tim' => 'images/participant/1/barca.png',
              'no_hp' => '08567782190312',
              'warna_kostum' => 'Merah Kuning',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '3',
              'user_id'      => '3',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'AJAX Amsterdam',
              'logo_tim' => 'images/participant/1/ajax.png',
              'no_hp' => '08137782190232',
              'warna_kostum' => 'Orange Putih',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '3',
              'user_id'      => '4',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Chelsea',
              'logo_tim' => 'images/participant/1/chelsea.png',
              'no_hp' => '085673829399',
              'warna_kostum' => 'Biru Putih',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '3',
              'user_id'      => '5',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Tottenham',
              'logo_tim' => 'images/participant/1/tottenham.png',
              'no_hp' => '08567782192122',
              'warna_kostum' => 'Hitam Putih',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '3',
              'user_id'      => '6',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Real Madrid',
              'logo_tim' => 'images/participant/1/madrid.png',
              'no_hp' => '08567711190245',
              'warna_kostum' => 'Hitam Emas',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '3',
              'user_id'      => '7',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Bayern Munchen',
              'logo_tim' => 'images/participant/1/munchen.png',
              'no_hp' => '08567782121232',
              'warna_kostum' => 'Biru Hitam',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '3',
              'user_id'      => '8',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            ),array(
              'nama_tim' => 'Juventus',
              'logo_tim' => 'images/participant/1/juventus.png',
              'no_hp' => '08567782111132',
              'warna_kostum' => 'Putih Hitam',
<<<<<<< HEAD
              'status' => 'waiting',
=======
              'status' => 'validated',
>>>>>>> 85fff12fbe3598adc2d42676b3b265c7d485963f
              'event_id' => '3',
              'user_id'      => '9',
              'created_at' => DB::raw('NOW()'),
              'updated_at' => DB::raw('NOW()'),
            )
        );
        // Comment the below to stop the seeder
        DB::table('participants')->insert($participants);
    }
}
