<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     *
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Paciente::class;
    public function definition()
    {
        return [
            'Nombre'=>$this->faker->name(),
            'DNI'=>$this->faker->numerify('####-').$this->faker->numberBetween(1980, 2000).$this->faker->numerify('-#####'),
            'Direccion'=>$this->faker->address(),
            'Telefono'=>$this->faker->phoneNumber(),
            'Trabaja'=>$this->faker->boolean()
        ];
    }
}
