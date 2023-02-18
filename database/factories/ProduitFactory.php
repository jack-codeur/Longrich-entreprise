<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom_produit" => $this->faker->firstName(),
            "id_typeArticle" => rand(1,6),
            "EstDisponible" => rand(0,1),
            "image_1" => $this->faker->imageUrl(),
            "image_2" => $this->faker->imageUrl(),
            "image_3" => $this->faker->imageUrl(),
            "image_4" => $this->faker->imageUrl(),
            "prix_promo" => $this->faker->numerify,
            "prix_reel" => $this->faker->numerify,
            "caracteristique" => $this->faker->text(225),
            "description_produit" => $this->faker->text(225),
            "mode_utilisation" => $this->faker->text(125)
        ];
    }
}
