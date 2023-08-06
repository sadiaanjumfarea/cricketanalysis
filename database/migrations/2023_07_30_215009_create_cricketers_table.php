<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCricketersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cricketers', function (Blueprint $table) {
            $table->id(); // Make sure this is an unsigned big integer (primary key).
            $table->string('name');
            $table->integer('innings')->nullable();
            $table->float('run_rate')->nullable();
            $table->integer('matches_played')->nullable();
            $table->text('other_details')->nullable();
            // Add other columns if needed.
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
        Schema::dropIfExists('cricketers');
    }
}
