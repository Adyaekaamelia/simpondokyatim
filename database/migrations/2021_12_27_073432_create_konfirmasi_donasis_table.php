<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonfirmasiDonasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfirmasi_donasis', function (Blueprint $table) {
            $table->id();
            $table->integer('tgl_transfer');
            $table->string('nama');
            $table->integer('norek');
            $table->string('nama_bank');
            $table->string('bukti')->nullable();
            $table->bigInteger('trans_id')->unsigned();
            $table->foreign('trans_id')->references('id')
                ->on('trans_donasis')->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('konfirmasi_donasis');
    }
}
