<?php

namespace Database\Factories;

use App\Models\Champion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Champion>
 */
class ChampionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Champion::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Lista de nombres de campeones de League of Legends
        $championNames = [
            'Ahri', 'Yasuo', 'Lee Sin', 'Zed', 'Lux', 'Ezreal', 'Garen', 'Jinx', 'Miss Fortune', 'Aatrox',
            'Katarina', 'Orianna', 'Thresh', 'Vayne', 'Fiora', 'Irelia', 'Riven', 'Kennen', 'Akali', 'Malphite',
            'Karthus', 'Ezreal', 'Teemo', 'Sona', 'Ryze', 'Galio', 'Swain', 'Shyvana', 'Taliyah', 'Tristana',
            'Kindred', 'LeBlanc', 'Ashe', 'Caitlyn', 'Vi', 'Corki', 'Syndra', 'Fiddlesticks', 'Nunu', 'Rengar',
            'Shaco', 'Kha\'Zix', 'Sivir', 'Renekton', 'Zilean', 'Annie', 'Cho\'Gath', 'Sejuani', 'Bard'
        ];

        // Lista de roles posibles
        $roles = ['Mage', 'Assassin', 'Tank', 'Marksman', 'Support', 'Fighter'];

        // Lista de carriles posibles
        $lanes = ['Mid', 'ADC', 'Jungle', 'Support', 'Top'];

        // Lista de orígenes (puedes ampliar esta lista si lo deseas)
        $origins = ['Demacia', 'Ionia', 'Noxus', 'Freljord', 'Piltover', 'Zaun', 'Bilgewater', 'Shadow Isles'];

        return [
            'name' => $this->faker->randomElement($championNames), // Elegir un nombre de la lista
            'role' => $this->faker->randomElement($roles), // Elegir un rol aleatorio
            'lane' => $this->faker->randomElement($lanes), // Elegir un carril aleatorio
            'origin' => $this->faker->randomElement($origins), // Elegir un origen aleatorio
            'release_date' => $this->faker->date(), // Generar una fecha aleatoria para el lanzamiento
        ];
    }
}
