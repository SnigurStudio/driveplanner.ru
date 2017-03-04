<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersTables extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('active')->default( false );
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('activate_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('code');
            $table->boolean('used')->default( false );
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role')->unique();
            $table->string('name');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('role_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('password_resets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->index();
            $table->string('token')->index();
            $table->boolean('used')->default( false );
            $table->timestamp('created_at')->nullable();
        });
    }


    public function down()
    {
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('activate_codes');
        Schema::dropIfExists('password_resets');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('users');
    }
}
