<?php

namespace App\Livewire\Forms;

use App\Models\Siswa;
use Illuminate\Validation\Rule;
use Livewire\Form;

class SiswaForm extends Form
{
    public ?Siswa $siswa = null;

    

    protected function rules(): array
    {
        return [

        ];
    }

    protected function messages(): array
    {
        return [

        ];
    }

    public function store()
    {
        $siswa = Siswa::query()->create($this->validate());
        $this->reset();
    }

    public function update()
    {
        $this->siswa->update($this->validate());

        $this->reset();
    }

    public function delete()
    {
        $this->siswa->delete();
        $this->reset();
    }

    public function fill($id) {

        $this->siswa = Siswa::query()->find($id);
        

    }
}
