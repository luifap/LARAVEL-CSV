<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcasts', function (Blueprint $table ) {
            $table->id();
            $table->integer('cedula');
            $table->integer('variable');
            $table->string('breakdown');
            $table->string('breakdown_category');
          //  $table->string('email')->unique();
           // $table->timestamp('email_verified_at')->nullable();
            $table->string('year');
            $table->string('rd_value');
            $table->string('units');
         //   $table->dateTime('fecha_inicio');
          //  $table->dateTime('fecha_fin');
            $table->string('footnotes');
          //  $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('podcasts');
    }
}
