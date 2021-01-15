<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('email', 255);
            $table->string('name', 255);
            $table->string('name_car', 255);
            $table->text('alamat', 255);
            $table->date('mulai');
            $table->date('kembali');
            $table->unsignedBigInteger('no_hp')->length(100);
            $table->integer('id_car')->length(100);
            $table->string('pembayaran');
            $table->string('status_pembayaran');
            $table->string('no_polisi', 255);
            $table->string('status_car', 255);
            $table->unsignedBigInteger('total')->length(100);
            $table->integer('tahun_kendaraan')->length(100);
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
        Schema::dropIfExists('order');
    }
}
