<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->uuid('user_code')->primary();
            $table->string('user_name');
            $table->string('user_password');
            $table->string('user_email')->unique();
            $table->string('user_phone', 15)->unique();
            $table->string('user_nickname');
            $table->string('user_bio');
            $table->string('user_profile');
            $table->timestamps();
            $table->softDeletes();
            $table->tinyInteger('is_active');
            $table->string('activation_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
