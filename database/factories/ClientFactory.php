<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->firstName(),
            "prenom" => $this->faker->lastName(),
            "sexe" => array_rand(['H', 'F'], 1),
            "nmeroTel" => $this->faker->phoneNumber,
            "id_UserRole" => rand(1,2),
            "ville" => $this->faker->country(),
            "communeOuQuartier" => $this->faker->city(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }
}
