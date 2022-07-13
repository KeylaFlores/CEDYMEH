<?php

namespace Database\Factories;

use App\Models\Medico;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicoFactory extends Factory
{
    /**
     *
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Medico::class;
    public function definition()
    {
        return [
            'Nombre'=>$this->faker->firstName(),
            'Apellido'=>$this->faker->lastName(),
            'DNI'=>$this->faker->numerify('####-').$this->faker->numberBetween(1980, 1997).$this->faker->numerify('-#####'),
            'Telefono'=>$this->faker->phoneNumber()
        ];
    }
}
