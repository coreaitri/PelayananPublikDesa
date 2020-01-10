<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('rt_id');
            $table->unsignedBigInteger('user_id');
            $table->bigInteger('no_kk');
            $table->string('nama_lengkap');
            $table->bigInteger('nik');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('agama', ['Islam', 'Kristen Protestan', 'Katolik', 'Budha', 'Hindu', 'Konghucu']);
            $table->enum('pendidikan_terakhir', ['Tidak/Belum Sekolah', 'Belum Tamat SD/Sederajat', 'Tamat SD/Sederajat', 'SLTP/Sederajat', 'SLTA/Sederajat', 'Diploma I/II', 'Akademi/Diploma III/S.Muda', 'Diploma IV/ Strata I', 'Strata II', 'Strata III']);
            $table->string('jenis_pekerjaan');
            $table->enum('status_perkawinan', ['Belum Kawin', 'Kawin']);
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wargas');
    }
}
