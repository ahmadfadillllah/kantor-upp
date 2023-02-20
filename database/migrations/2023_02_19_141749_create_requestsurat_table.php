<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestsurat', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('no_hp');
            $table->foreignId('daftarsurat_id')->constrained('daftarsurat')->cascadeOnDelete();
            $table->string('nama');
            $table->string('nama_panggilan_kapal');
            $table->string('surat')->nullable();
            $table->string('status');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('requestsurat');
    }
};
