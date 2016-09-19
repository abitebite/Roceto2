<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = array(
          array(
            'nama' => 'Futsal',
            'detail' => 'Futsal',
            'thumbnail' => 'images/event/Futsal.jpg',
            'peraturan' => '<ol>
                            <li>Peraturan Perlomban</li>
                            <li>Biaya Pendaftaran</li>
                            <li>Kuota Perlombaan</li>
                            </ol>',
            'biaya_pendaftaran' => '200000',
            'kuota' => '8',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Basket',
            'detail' => 'Basket',
            'thumbnail' => 'images/event/635917587797106346-USP-NCAA-BASKETBALL-UTAH-AT-OREGON-79491238.JPG',
            'peraturan' => '<ol>
                            <li>Peraturan Perlomban</li>
                            <li>Biaya Pendaftaran</li>
                            <li>Kuota Perlombaan<br /><br /></li>
                            </ol>',
            'biaya_pendaftaran' => '250000',
            'kuota' => '8',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Bulu Tangkis',
            'detail' => 'Bulu Tangkis',
            'thumbnail' => 'images/event/tenis.JPG',
            'peraturan' => '<ol>
                            <li>Peraturan Perlomban</li>
                            <li>Biaya Pendaftaran</li>
                            <li>Kuota Perlombaan<br /><br /></li>
                            </ol>',
            'biaya_pendaftaran' => '220000',
            'kuota' => '8',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Voli',
            'detail' => 'Voli',
            'thumbnail' => '',
            'peraturan' => '',
            'biaya_pendaftaran' => '',
            'kuota' => '',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Renang',
            'detail' => 'Renang',
            'thumbnail' => '',
            'peraturan' => '',
            'biaya_pendaftaran' => '',
            'kuota' => '',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Marathon',
            'detail' => 'Marathon',
            'thumbnail' => '',
            'peraturan' => '',
            'biaya_pendaftaran' => '',
            'kuota' => '',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Lompat Tinggi',
            'detail' => 'Lompat Tinggi',
            'thumbnail' => '',
            'peraturan' => '',
            'biaya_pendaftaran' => '',
            'kuota' => '',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          ),array(
            'nama' => 'Catur',
            'detail' => 'Catur',
            'thumbnail' => '',
            'peraturan' => '',
            'biaya_pendaftaran' => '',
            'kuota' => '',
            'created_at' => DB::raw('NOW()'),
            'updated_at' => DB::raw('NOW()'),
          )
        );
        // Comment the below to stop the seeder
        DB::table('events')->insert($events);
    }
}
