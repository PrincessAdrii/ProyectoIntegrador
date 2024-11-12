<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PeriodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $indice = -1;
        $indice++;

        $periodos = [
            ['Ene-Jun 24', 'E-J24', '2024-01-20', '2024-06-23'],
            ['Ago-Dic 24', 'A-D24', '2024-08-21', '2024-12-24'],
            ['Ene-Jun 25', 'E-J25', '2025-01-22', '2025-06-25'],
            ['Ago-Dic 25', 'A-D25', '2025-08-23', '2025-12-26'],
            ['Ene-Jun 26', 'E-J26', '2026-01-24', '2026-06-28'],
            ['Ago-Dic 26', 'A-D26', '2026-08-25', '2026-12-29'],
            ['Ene-Jun 27', 'E-J27', '2027-01-26', '2027-06-30'],
        ];

        if ($indice >= count($periodos)) {
            $indice = 0;
        }

        return [
            'idPeriodo' => $this->faker->unique()->bothify("#####"),
            'periodo' => $periodos[$indice][0],
            'descCorta' => $periodos[$indice][1],
            'fechaIni' => $periodos[$indice][2],
            'fechaFin' => $periodos[$indice][3],
        ];
    }
}
