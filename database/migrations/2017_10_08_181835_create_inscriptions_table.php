<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('classe_1');
            $table->string('referent_1');
            $table->string('nombre_1');
            $table->string('accompagnant_1');
            $table->string('etablissement');
            $table->string('adresse');
            $table->string('code');
            $table->string('telephone');
            $table->string('mail_1');
            $table->string('mail_2');
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
        Schema::dropIfExists('inscriptions');
    }
}