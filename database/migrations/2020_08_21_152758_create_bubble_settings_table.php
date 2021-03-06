<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBubbleSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bubble_settings', function (Blueprint $table) {
            $table->id();
            $table->float('matPrice1')->nullable();
            $table->float('matPrice2')->nullable();
            $table->float('matPrice3')->nullable();
            $table->float('matPrice4')->nullable();
            $table->float('matPrice5')->nullable();
            $table->float('matPrice6')->nullable();

            $table->string('matCur1')->nullable();
            $table->string('matCur2')->nullable();
            $table->string('matCur3')->nullable();
            $table->string('matCur4')->nullable();
            $table->string('matCur5')->nullable();
            $table->string('matCur6')->nullable();

            $table->float('printingFee1')->nullable();
            $table->float('printingFee2')->nullable();
            $table->float('printingFee3')->nullable();
            $table->float('printingFee4')->nullable();
            $table->float('printingFee5')->nullable();

            $table->string('printigCur1')->nullable();
            $table->string('printigCur2')->nullable();
            $table->string('printigCur3')->nullable();
            $table->string('printigCur4')->nullable();
            $table->string('printigCur5')->nullable();

            $table->float('taxPoint')->nullable();
            $table->float('profit')->nullable();

            $table->float('usdCur')->nullable();
            $table->float('euroCur')->nullable();
            $table->float('poundCur')->nullable();
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
        Schema::dropIfExists('bubble_settings');
    }
}
