<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noKTP');
            $table->string('password');
            $table->string('namaLengkap');
            $table->string('pekerjaan');
            $table->string('jabatan');
            $table->string('alamat');
            $table->string('kodePos');
            $table->string('kewarganegaraan');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('email');
            $table->string('noHP');
            $table->string('noTelpRumah');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
        Schema::drop('members');
    }

}
