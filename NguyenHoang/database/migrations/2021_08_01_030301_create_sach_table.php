<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sach', function (Blueprint $table) {
            $table->increments('STT');
            $table->string('MS');
            $table->string('TenSach');
            $table->string('TacGia');
            $table->string('NSB');
            $table->integer('SoLuong');
            $table->integer('DonGia');
            $table->string('TheLoai');
            $table->string('AnhSP');
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
        Schema::dropIfExists('sach');
    }
}
