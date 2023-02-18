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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('nmeroTel');
            $table->string('country');
            $table->string('state');
            $table->date('date_livraison');
            $table->integer('quantity');
            $table->string('name');
            $table->integer('price');
            $table->integer('total');
            $table->foreignId('id_statusCommande')->constrained('status_commandes');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');

        Schema::table('commandes', function(Blueprint $table){
            $table->dropForeign('id_statusCommande');
        });
    }
};
