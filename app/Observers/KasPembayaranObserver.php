<?php

namespace App\Observers;

use App\Enums\StatusPembayaran;
use App\Models\KasPembayaran;

class KasPembayaranObserver
{

    /**
     * Handle the KasPembayaran "saving" event.
     */
    public function saving(KasPembayaran $pembayaran): void
    {
        // Update status otomatis berdasarkan jumlah_bayar
        // if ($pembayaran->jumlah_bayar >= 2000) {
        //     $pembayaran->status = StatusPembayaran::LUNAS;
        // } elseif ($pembayaran->jumlah_bayar > 0 && $pembayaran->jumlah_bayar < 2000) {
        //     $pembayaran->status = StatusPembayaran::KURANG;
        // } else {
        //     $pembayaran->status = StatusPembayaran::BELUM;
        // }
    }


    /**
     * Handle the KasPembayaran "created" event.
     */
    public function created(KasPembayaran $kasPembayaran): void
    {
        //
    }

    /**
     * Handle the KasPembayaran "updated" event.
     */
    public function updated(KasPembayaran $kasPembayaran): void
    {
        //
    }

    /**
     * Handle the KasPembayaran "deleted" event.
     */
    public function deleted(KasPembayaran $kasPembayaran): void
    {
        //
    }

    /**
     * Handle the KasPembayaran "restored" event.
     */
    public function restored(KasPembayaran $kasPembayaran): void
    {
        //
    }

    /**
     * Handle the KasPembayaran "force deleted" event.
     */
    public function forceDeleted(KasPembayaran $kasPembayaran): void
    {
        //
    }
}
