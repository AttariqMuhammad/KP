<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('Bulan');
            $table->char('Tahun', 4);
            $table->char('Urea');
            $table->char('Pabrik_Sub');
            $table->char('Pabrik_Nonsub');
            $table->char('Pabrik_Total');
            $table->char('SiapJual_Sub');
            $table->char('SiapJual_Nonsub');
            $table->char('SiapJual_Total');
            $table->char('Total');
            $table->timestamps();
        });
    }
/*
    $table->id();
    $table->month('Bulan');
    $table->char('Urea');
    $table->char('Pabrik_Sub');
    $table->char('Pabrik_NonSub');
    $table->char('Pabrik_Total');
    $table->char('SiapJual_Sub');
    $table->char('SiapJual_NonSub');
    $table->char('SiapJual_Total');
    $table->char('Total');
    $table->char('StokAwal');
    $table->char('StokAwal_Subsidi');
    $table->char('StokAwal_NonSubsidi');
    $table->timestamps();
*/
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
