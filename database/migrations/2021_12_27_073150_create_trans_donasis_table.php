<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransDonasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans_donasis', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_donasi');
            $table->integer('nominal');
            $table->string('ket');
            $table->string('username');
            $table->integer('no_tlpn');
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
        Schema::dropIfExists('trans_donasis');
    }
}
