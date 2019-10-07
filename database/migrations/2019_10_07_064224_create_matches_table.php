<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mname');
            $table->string('hteam');
            $table->string('ateam');
            $table->string('field');
            $table->dateTime('mtime');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('matches');
    }

}
