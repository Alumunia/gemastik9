<?php

use Illuminate\Database\Seeder;

class question_table_seeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        DB::table('question')->insert(['question' => 'username', 'parameter' => 'username', 'type' => 'text']);
        DB::table('question')->insert(['question' => 'Password', 'parameter' => 'password', 'type' => 'password']);
        DB::table('question')->insert(['question' => 'Nomor KTP', 'parameter' => 'noKTP', 'type' => 'text']);
        DB::table('question')->insert(['question' => 'Nama Lengkap', 'parameter' => 'namaLengkap', 'type' => 'text']);
        DB::table('question')->insert(['question' => 'Alamat', 'parameter' => 'alamat', 'type' => 'text']);
        DB::table('question')->insert(['question' => 'Email', 'parameter' => 'email', 'type' => 'text']);
        DB::table('question')->insert(['question' => 'RT', 'parameter' => 'rt', 'type' => 'text']);
        DB::table('question')->insert(['question' => 'RW', 'parameter' => 'rw', 'type' => 'text']);
        DB::table('question')->insert(['question' => 'Kelurahan', 'parameter' => 'kelurahan', 'type' => 'text']);
    }

}
