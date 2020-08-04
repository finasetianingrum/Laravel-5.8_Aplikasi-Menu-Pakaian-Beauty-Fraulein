<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBrand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_brand', 30);
            $table->timestamps();
        });

        //Set fk di kolom id_brand di tabel_product
        Schema::table('product', function(Blueprint $table) {
            $table->foreign('id_brand')
            ->references('id')
            ->on('brand')
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
        //Drop fk di kolom id_brand di tabel product
        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign('product_id_brand_foreign');
        });
        Schema::dropIfExists('brand');
    }
}
