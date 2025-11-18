<?php

namespace App\Livewire\Forms;

use App\Models\Kelas;
use Illuminate\Validation\Rule;
use Livewire\Form;

class KelasForm extends Form
{
    public ?Kelas $kelas = null;

    public string $nama_kelas = '';

    protected function rules(): array
    {
        return [
            'nama_kelas' => 'required',
        ];
    }

    protected function messages(): array
    {
        return [
            'nama_kelas.required' => 'Nama Kelas wajib diisi.',
        ];
    }

    public function store()
    {
        $kela = Kelas::query()->create($this->validate());
        $this->reset();
    }

    public function update()
    {
        $this->kelas->update($this->validate());

        $this->reset();
    }

    public function delete()
    {
        $this->kelas->delete();
        $this->reset();
    }

    public function fill($id) {

        $this->kelas = Kelas::query()->find($id);
        $this->nama_kelas = $this->kelas->nama_kelas;

    }
}
