<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePairingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pairings', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->dateTime('kickoff')->comment('キックオフ時間');
            $table->integer('my_country_id')->unsigned()->comment('対戦国1');
            $table->integer('enemy_country_id')->unsigned()->comment('対戦国2');
            $table->timestamps();

            $table->index('my_country_id');
            $table->index('enemy_country_id');

            $table->foreign('my_country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('enemy_country_id')
                ->references('id')
                ->on('countries')
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
        Schema::dropIfExists('pairings');
    }
}
