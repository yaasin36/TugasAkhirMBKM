<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        //
        Schema::create('tbl_pengeluarans', function (Blueprint $table) {
            $table->id('id_pengeluaran');
            $table->integer('id_user');
            $table->integer('id_sumber');
            $table->date('tgl_pengeluaran');
            $table->bigInteger('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tbl_pengeluarans');
    }
};
