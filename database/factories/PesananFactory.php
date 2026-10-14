<?php

namespace Database\Factories;

use App\Models\Layanan;
use App\Models\Pesanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pesanan>
 */
class PesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'layanan_id'=>Layanan::inRandomOrder()->value('id'),
                'nama_pelanggan' =>fake()->name(),
                'tanggal_masuk' => fake()->dateTime('now'),
                'jumlah'=>fake()->numerify('##'),
                'status'=>null,
                'total_biaya'=> fake()->numerify('######')
        ];
    }
}
