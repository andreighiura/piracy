<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('quests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('game');
            $table->string('pct');
            $table->string('desc');
            $table->string('imgur_url');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('quests');
    }
}
