<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'Id_User' => mt_rand(1, 10),
            'Alamat' => $this->faker->address(),
            'Telepon' => $this->faker->phoneNumber(),
            'NoHP' => $this->faker->e164PhoneNumber(),
            'Gaji' => mt_rand(1000000, 2000000)

        ];
    }
}
