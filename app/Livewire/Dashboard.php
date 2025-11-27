<?php

namespace App\Livewire;

use App\Models\BasisPengetahuan;
use App\Models\Gejala;
use App\Models\Penyakit;
use Livewire\Component;

class Dashboard extends Component
{

    public function render()
    {
        return view('livewire.dashboard');
    }
}
