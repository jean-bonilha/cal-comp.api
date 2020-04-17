<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDQCMODELTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DQCMODEL', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('MODEL');
            $table->timestamp('UPDATE_DT', 0);
            $table->timestamp('CREATE_DT', 0)->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DQCMODEL');
    }
}
