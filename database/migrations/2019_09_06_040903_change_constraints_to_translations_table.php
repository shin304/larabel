<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeConstraintsToTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('translations', function (Blueprint $table) {

            $table->text('english')->nullable()->change();
            $table->text('japanese')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('translations', function (Blueprint $table) {

            DB::statement('ALTER TABLE `translations` MODIFY `english` TEXT NOT NULL;');
            DB::statement('ALTER TABLE `translations` MODIFY `japanese` TEXT NOT NULL;');

        });
    }
}
