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
            $table->string('classe_2');
            $table->string('referent_2');
            $table->string('nombre_2');
            $table->string('accompagnant_2');
            $table->string('classe_3');
            $table->string('referent_3');
            $table->string('nombre_3');
            $table->string('accompagnant_3');
            $table->string('etablissement');
            $table->string('adresse');
            $table->string('ville');
            $table->string('code');
            $table->string('telephone');
            $table->string('faxe');
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
