<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\KasPembayaran;
use App\Models\User;
use App\Models\Kelas;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::factory()->create([
            'name' => 'Pembina Osis',
            'email' => 'admin@gmail.com',
            'role' => Role::PEMBINA_OSIS
        ]);

        $this->call([
            KelasSeeder::class,
            KasMingguanSeeder::class,
            KasPembayaranSeeder::class,
        ]);

    }
}
