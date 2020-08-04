<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMacam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('macam', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_macam', 50);
            $table->string('deskripsi', 100);
            $table->timestamps();
        });

        //Set fk di kolom id_macam di tabel product
        Schema::table('product', function (Blueprint $table) {
            $table->foreign('id_macam')
            ->references('id')
            ->on('macam')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop fk di kolom id_kelas
        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign('product_id_macam_foreign');
        });
        Schema::dropIfExists('macam');
    }
}
