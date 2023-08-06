<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCricketerTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cricketer_team', function (Blueprint $table) {
            $table->unsignedBigInteger('cricketer_id');
            $table->unsignedBigInteger('team_id');
            $table->timestamps();

            // Define foreign keys
            $table->foreign('cricketer_id')->references('id')->on('cricketers')->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cricketer_team');
    }
}
