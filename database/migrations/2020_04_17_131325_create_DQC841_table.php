<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDQC841Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DQC841', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('FAT_PART_NO');
            $table->string('PARTS_NO');
            $table->integer('UNT_USG');
            $table->longText('DESCRIPTION');
            $table->longText('REF_DESIGNATOR');
            $table->timestamp('UPDATE_DT', 0);
            $table->timestamp('CREATE_DT', 0)->useCurrent();

            $table->foreign('FAT_PART_NO')->references('ID')->on('DQC84');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DQC841');
    }
}
