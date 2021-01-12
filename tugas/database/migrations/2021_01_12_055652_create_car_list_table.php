<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_list', function (Blueprint $table) {
                $table->id();
                $table->string('name', 255);
                $table->double('price');
                $table->text('description');
                $table->integer('isi_penumpang')->length(11);
                $table->integer('pintu')->length(11);
                $table->string('img_path', 255)->nullable();
                $table->string('status', 255);
                $table->string('no_polisi', 255)->unique();
                $table->integer('tahun')->length(11);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_list');
    }
}
