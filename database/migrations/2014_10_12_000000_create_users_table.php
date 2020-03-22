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
            $table->id(); //autoincrement??
            $table->string('name')->default('');    // varchar
            $table->string('email')->unique()->nullable(); // varchar - unico
            $table->timestamp('email_verified_at')->nullable();  // varchar
            $table->string('password')->default('');
            $table->boolean('is_admin')->default(false);
            $table->unsignedBigInteger('profession_id');
            $table->foreign('profession_id')->references('id')->on('professions');
            $table->rememberToken();    //helper
            $table->timestamps();       //helper
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
