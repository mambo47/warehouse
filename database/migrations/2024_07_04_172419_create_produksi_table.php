<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produksi', function (Blueprint $table) {
            $table->id();
            $table->string('komoditas_id'); // Tipe data harus sama dengan kolom yang dirujuk
            $table->integer('jumlah_produksi');
            $table->date('tanggal_produksi');
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('komoditas_id')->references('id')->on('komoditas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produksi');
    }
}

?>