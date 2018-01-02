<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('nomor_transaksi');
            $table->integer('id_customer');
            $table->integer('id_barang');
            $table->integer('jumlah');
            $table->string('file', 200);
            $table->text('keterangan');
            $table->date('tanggal_pesan');
            $table->date('tanggal_jadi');
            $table->string('status_ambil', 24);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
