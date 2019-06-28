<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relawans', function (Blueprint $table) {
            $table->string('id_relawan');
            $table->string('nama');
            $table->string('status');
            $table->string('email');
            $table->string('noHP');
            $table->string('keahlian');
            $table->string('alamat');
            $table->integer('usia');
            $table->string('tim');
            $table->text('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relawans');
    }
}
