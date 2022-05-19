<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PodcastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cedula' => $this->faker->numberBetween(),
           'variable' => $this->faker->numberBetween(0,10),
           'breakdown' => $this->faker->name(),
           'breakdown_category' => $this->faker->lastName(),
           // 'email' => $this->faker->unique()->safeEmail(),
           // 'email_verified_at' => now(),
            'year' => $this->faker->secondaryAddress(),
            'rd_value' => $this->faker->streetName(),
            'units' => $this->faker->country(),
           // 'fecha_inicio' => $this->faker->dateTime(),
          //   'fecha_fin' => $this->faker->dateTime(),
            'footnotes' => $this->faker->text(),
             //   'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

        ];
    }
}
