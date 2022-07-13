<?php

namespace Database\Factories;

use App\Models\Administrativo;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdministrativoFactory extends Factory
{
    /**
     *
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Administrativo::class;
    public function definition()
    {
        return [
            'Nombre'=>$this->faker->firstName(),
            'Apellido'=>$this->faker->lastName(),
            'DNI'=>$this->faker->numerify('####-').$this->faker->numberBetween(1980, 1997).$this->faker->numerify('-#####'),
            'Direccion'=>$this->faker->address(),
            'Telefono'=>$this->faker->phoneNumber()
        ];
    }
}
