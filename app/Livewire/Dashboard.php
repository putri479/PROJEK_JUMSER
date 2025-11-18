<?php

namespace App\Livewire;

use App\Models\BasisPengetahuan;
use App\Models\Gejala;
use App\Models\Penyakit;
use Livewire\Component;

class Dashboard extends Component
{
    public int $jumlah_penyakit;

    public int $jumlah_gejala;

    public int $jumlah_basis_pengetahuan;

    public function render()
    {
        return view('livewire.dashboard');
    }
}
