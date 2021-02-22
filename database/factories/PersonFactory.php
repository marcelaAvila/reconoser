<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cedula' => $this->faker->numberBetween(1000000, 1999999999),
            'nombre' => $this->faker->name,
            'direccion' => $this->faker->address,
            'ciudad' => $this->faker->city,
            'pais' => $this->faker->country,
            'celular' => $this->faker->phoneNumber,
            'imagen' => base64_encode($this->faker->image()),
            'latitud' => $this->faker->latitude,
            'longitud' => $this->faker->longitude,
            'estadoBT' => $this->faker->randomElement([true, false]),
            'estadoWF' => $this->faker->randomElement([true, false])
        ];
    }
}
