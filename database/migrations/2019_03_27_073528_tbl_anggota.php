<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('tbl_anggota',function(Blueprint $table){
            $table->increments("id");
            $table->string("nim",11);
            $table->string("nama",100);
            $table->string("alamat",255);
            $table->string("angkatan",25);
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
        //
        schema::drop("tbl_anggota");

    }
}
