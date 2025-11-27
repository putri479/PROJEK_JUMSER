<?php

namespace App\Livewire\Table;

use App\Models\KasPembayaran;
use App\Models\KasMingguan;
use App\Models\Siswa;
use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Traits\WithModal;
use App\Traits\WithNotify;
use Livewire\Attributes\Title;

class DetailKasMingguan extends Component
{
    use WithModal;
    use WithNotify;

    public ?int $jumlah_bayar;

    public int $mingguanId;

    public ?KasPembayaran $selectedKasPembayaran = null;

    //filter
    public string $tahun = '2025';
    public string $bulan;
    public string $minggu_ke;

    public function mount($mingguanId)
    {
        $this->mingguanId = $mingguanId;

        // Ambil data dari database
        $mingguan = KasMingguan::query()->findOrFail($mingguanId);

        // Isi otomatis
        $this->tahun = $mingguan->tahun ?? date('Y');
        $this->bulan = $mingguan->bulan ?? date('m');
        $this->minggu_ke = $mingguan->minggu_ke ?? 1;
    }

    #[Computed]
    public function dataMingguan()
    {
        return KasMingguan::findOrFail($this->mingguanId);
    }

    #[Computed]
    public function pembayaranList()
    {
        $kelasId = auth()->user()->kelas->id;

        return KasPembayaran::query()
            ->with('siswa')
            ->where('kas_mingguan_id', $this->mingguanId)
            ->whereHas('siswa', fn($q) =>
                $q->where('kelas_id', $kelasId)
            )
            ->orderBy('siswa_id')
            ->get();
    }


    public function edit($id) {

        $this->selectedKasPembayaran = KasPembayaran::findOrFail($id);
        $this->jumlah_bayar = $this->selectedKasPembayaran->jumlah_bayar;
        $this->openModal('modal-edit');

    }

    public function update()
    {

        $this->validate([
            'jumlah_bayar' => ['required', 'numeric', 'min:0'],
        ], [
            'jumlah_bayar.required' => 'Jumlah bayar wajib diisi.',
            'jumlah_bayar.numeric'  => 'Jumlah bayar harus berupa angka.',
            'jumlah_bayar.min'      => 'Jumlah bayar tidak boleh kurang dari 0.',
        ]);

        $this->selectedKasPembayaran->jumlah_bayar = $this->jumlah_bayar;
        $this->selectedKasPembayaran->save();

        $this->notifySuccess('Berhasil menyimpan perubahan');
        $this->closeModal('modal-edit');

    }

    public function render()
    {
        return view('livewire.table.detail-kas-mingguan');
    }
}
