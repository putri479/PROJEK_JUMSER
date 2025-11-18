<?php

namespace Database\Factories;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class KelasFactory extends Factory
{
    protected $model = Kelas::class;

    public function definition(): array
    {
        // contoh nama kelas acak
        $kelasList = [
            'X RPL 1', 'X RPL 2',
            'XI RPL 1', 'XI RPL 2',
            'XII RPL 1', 'XII RPL 2',
            'X TKJ 1', 'XI TKJ 1', 'XII TKJ 1'
        ];

        return [
            'nama_kelas' => $this->faker->randomElement($kelasList),
        ];
    }
}
