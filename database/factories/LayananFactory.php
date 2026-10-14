<?php

namespace Database\Factories;

use App\Models\Layanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Layanan>
 */
class LayananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'kode_layanan'=>fake()->unique()->numerify('LK-00#'),
                'nama_layanan' =>fake()->name(),
                'jenis' => fake()->name(),
                'tarif_per_satuan'=> fake()->numerify('######')
        ];
    }
}
