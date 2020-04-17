<?php use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema;

class CreateDQC84Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DQC84', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->unsignedBigInteger('MODEL');
            $table->string('FAT_PART_NO', 15)->unique();
            $table->integer('TOTAL_LOCATION');
            $table->timestamp('UPDATE_DT', 0);
            $table->timestamp('CREATE_DT', 0)->useCurrent();

            $table->foreign('MODEL')->references('ID')->on('DQCMODEL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DQC84');
    }
}
