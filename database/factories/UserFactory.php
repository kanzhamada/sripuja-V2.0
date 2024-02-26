<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $Password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'Nama_Lengkap' => $this->faker->name(),
            'Username' => $this->faker->unique()->userName(),
            'Password' => static::$Password ??= Hash::make('Password'),
            'Is_Owner' => $this->faker->boolean()
        ];
    }
}
