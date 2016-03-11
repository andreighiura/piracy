<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->string('email');
            $table->string('lol_name');
            $table->string('steam_name');
            $table->string('battlenet_name');
            $table->integer('lol_pct');
            $table->integer('battlenet_pct');
            $table->integer('steam_pct');
            $table->integer('gen_pct');
            $table->string('username');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
