<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscrip_partenaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('nmeroTel');
            $table->string('pays');
            $table->string('ville');
            $table->string('niveau_adhesion');
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
        Schema::dropIfExists('inscrip_partenaires');
    }
};
