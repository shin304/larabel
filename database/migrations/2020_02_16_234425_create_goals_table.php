<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->integer('pairing_id')->unsigned()->comment('対戦テーブルID');
            $table->integer('player_id')->unsigned()->comment('選手ID');
            $table->string('goal_time', 10)->comment('ゴール時間');
            $table->timestamps();

            $table->index('pairing_id');
            $table->index('player_id');

            $table->foreign('pairing_id')
                ->references('id')
                ->on('pairings')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('player_id')
                ->references('id')
                ->on('players')
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
        Schema::dropIfExists('goals');
    }
}
