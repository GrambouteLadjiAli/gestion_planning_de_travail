<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero_inscription' => $this -> faker ->numberBetween(),
            'nom_complet' => $this -> faker ->name(),
            'depart' => $this -> faker ->word(),
            'date_emboche' => $this -> faker ->date(),
            'telephone' => $this -> faker ->numberBetween(),
            'adresse' => $this -> faker ->address(),
            'ville' => $this -> faker ->city(),
        ];
    }
}
