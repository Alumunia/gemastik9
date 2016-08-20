<?php

use Illuminate\Database\Seeder;

class question_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('question')->insert(['question' => 'Nomor KTP','parameter'=>'noKTP','type'=>'text']);
        DB::table('question')->insert(['question' => 'Password','parameter'=>'password','type'=>'password']);
        DB::table('question')->insert(['question' => 'Nama Lengkap','parameter'=>'namaLengkap','type'=>'text']);
        DB::table('question')->insert(['question' => 'Pekerjaan','parameter'=>'pekerjaan','type'=>'text']);
        DB::table('question')->insert(['question' => 'Jabatan','parameter'=>'jabatan','type'=>'text']);
        DB::table('question')->insert(['question' => 'Alamat','parameter'=>'alamat','type'=>'text']);
        DB::table('question')->insert(['question' => 'Kode POS','parameter'=>'kodePOS','type'=>'text']);
        DB::table('question')->insert(['question' => 'Kewarganegaraan','parameter'=>'kewarganegaraan','type'=>'text']);
        DB::table('question')->insert(['question' => 'Provinsi','parameter'=>'provinsi','type'=>'text']);
        DB::table('question')->insert(['question' => 'Kabupaten','parameter'=>'kabupaten','type'=>'text']);
        DB::table('question')->insert(['question' => 'Email','parameter'=>'email','type'=>'text']);
        DB::table('question')->insert(['question' => 'Nomor HP','parameter'=>'noHP','type'=>'text']);
        DB::table('question')->insert(['question' => 'Nomor Telp Rumah','parameter'=>'noTelpRumah','type'=>'text']);
    }
}
