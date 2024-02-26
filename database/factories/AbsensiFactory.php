<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AbsensiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Tanggal' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now')->format('Y-m-d'),
            'Absen' => $this->faker->boolean(),
            'Id_Karyawan' => mt_rand(1, 3)
            //
        ];
    }
}
