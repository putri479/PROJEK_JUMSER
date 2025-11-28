<?php

namespace App\Models;

use App\Enums\StatusPembayaran;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KasPembayaran extends Model
{
    use HasFactory;

    protected $table = 'kas_pembayaran';
    protected $guarded = [];

    // public function casts(): array {
    //     return [
    //         'status' => StatusPembayaran::class
    //     ];
    // }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function kasMingguan()
    {
        return $this->belongsTo(KasMingguan::class, 'kas_mingguan_id');
    }


    public function pemasukan()
    {
        return $this->hasOne(Pemasukan::class, 'kas_pembayaran_id');
    }

}
