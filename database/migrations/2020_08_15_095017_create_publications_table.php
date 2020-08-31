<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id'); // correspond à la clé etrangers de la table
            $table->timestamps();  //ajoute les champs created_at et updated_at
            $table->text('content');
            $table->mediumText('image')->nullable();
            $table->mediumText('video')->nullable();
            $table->integer('user_id'); //correspond à un integer strictement positif 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}








