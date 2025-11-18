<?php

namespace App\Livewire\Table;

use App\Models\Siswa;
use App\Livewire\Forms\SiswaForm;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;
use App\Traits\WithModal;
use App\Traits\WithNotify;
use Livewire\Attributes\On;

class SiswaTable extends Component
{

    use WithPagination;
    use WithModal;
    use WithNotify;

    public string $search = '';

    public SiswaForm $form;

    #[Computed]
    public function siswaList()
    {
    return Siswa::query()
        ->when($this->search, function($query) {
           $query->whereAny([''], 'like', '%' . $this->search . '%');
        })
        ->paginate(10);
    }

    public function add()
    {
        $this->form->reset();
        $this->openModal('modal-add');
    }

    public function save()
    {

        $this->form->store();
        $this->notifySuccess('Siswa berhasil ditambahkan!');

        $this->closeModal('modal-add');
        $this->form->reset();

    }

    public function detail($id) {

        $this->form->fill($id);
        $this->openModal('modal-detail');

    }

    public function edit($id) {

        $this->form->fill($id);
        $this->openModal('modal-edit');

    }

    public function update() {
        $this->form->update();

        $this->notifySuccess('Siswa berhasil diperbarui!');
        $this->closeModal('modal-edit');

    }

    public function delete($id)
    {
        $this->form->fill($id);
        $this->dispatch('deleteConfirmation', message: 'Yakin untuk menghapus data Siswa?');
    }

    #[On('deleteConfirmed')]
    public function deleteConfirmed()
    {
        $this->form->delete();
        $this->notifySuccess('Siswa berhasil dihapus!');
    }

    public function render()
    {
        return view('livewire.table.siswa-table');
    }
}
