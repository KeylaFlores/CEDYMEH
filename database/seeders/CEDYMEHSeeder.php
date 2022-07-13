<?php

namespace Database\Seeders;

use App\Models\Administrativo;
use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Database\Seeder;

class CEDYMEHSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medico::factory(1000)->create();
        Paciente::factory(1000)->create();
        Administrativo::factory(1000)->create();
    }
}
