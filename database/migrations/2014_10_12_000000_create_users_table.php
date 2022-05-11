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
            $table->id();
           // $table->string('cedula');
            $table->string('name');
          //  $table->string('apellido');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
          //  $table->string('direccion');
          //  $table->string('curso');
          //  $table->string('programa');
          //  $table->string('fecha_inicio');
          //  $table->string('fecha_fin');
         //   $table->string('estado');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
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
