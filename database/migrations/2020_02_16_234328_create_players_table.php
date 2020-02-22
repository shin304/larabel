<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->integer('country_id')->unsigned()->comment('国テーブルID');
            $table->integer('uniform_num')->comment('背番号');
            $table->string('position',2)->comment('ポジション');
            $table->string('name',50)->comment('選手名');
            $table->string('club',50)->comment('所属クラブ');
            $table->date('birth')->comment('誕生日');
            $table->integer('height')->comment('身長');
            $table->integer('weight')->comment('体重');
            $table->timestamps();

            $table->index('country_id');

            $table->foreign('country_id')
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
        Schema::dropIfExists('players');
    }
}
