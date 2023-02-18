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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_typeArticle')->constrained('type_articles');
            $table->string('nom_produit');
            $table->string('EstDisponible');
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');
            $table->string('image_4');
            $table->string('prix_promo');
            $table->string('prix_reel');
            $table->text('caracteristique')->default();
            $table->text('description_produit')->default();
            $table->text('mode_utilisation')->default();
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
        Schema::dropIfExists('produits');

        Schema::table('produits', function(Blueprint $table){
            $table->dropForeign('id_typeArticle');
        });
    }
};
