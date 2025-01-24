<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'foo' => fake()->word(),
                'password' => static::$password ??= Hash::make('password'),
                'remember_token' => Str::random(10),
            ];
    }

    /**
     *  0 1 2 3
     * [1,2,3,4]  arr
     * 
     * map<key, value>
     * map<string, int>
     * map<double, string>
     * map<string, dynamic>
     * map<Object, Object> Integer Double Float
     *  'a' 'b' 'perro' 'algo'
     * [ 1,  2,  3,      4 ]   mapa
     *  
     *  0.3  4.8
     * [ 'a', 'perros' ] 
     * 
     *  @3  @5
     * [@1, @2]
     * 
     * arr[1] = 2
     * 
     * mapa['a'] = 1
     * mapa['perros'] = 3
     * 
     * {
     *  //pon un json de un usuario
     * "name": "Juan",
     * "email": 12,
     * "password": 44.44,
     * "email_verified_at": true,
     * "remember_token": {
     *    "algo": "algo"
     *    "algo2": "algo2"
     *    "algo3": [
     *       1, 2, 3, 4
     *   ]
     * }
     * 
     * 
     * 
     * }
     */

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
