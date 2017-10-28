<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunas', function (Blueprint $table) {
            $table->string('penggunas_dev_id')->primary();
            $table->string('penggunas_nama');
            $table->string('penggunas_alamat')->nullable();;
            $table->string('penggunas_email')->nullable();
            $table->string('penggunas_no_hp')->nullable();
            $table->string('penggunas_lat');
            $table->string('penggunas_long');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penggunas');
    }
}
