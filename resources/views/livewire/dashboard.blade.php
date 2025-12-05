@php
  use App\Enums\Role;

  $role = auth()->user()->role;
@endphp

<div class="row">
    @if ($role === Role::BENDAHARA_OSIS)

    <!-- Total Pemasukan -->
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon green mb-2">
                            <i class="iconly-boldWallet"></i> <!-- Ikon pemasukan -->
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Total Pemasukan Bulan Ini</h6>
                        <h6 class="font-extrabold mb-0">{{ $totalPemasukan }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Pengeluaran -->
    <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon red mb-2">
                            <i class="iconly-boldPaper"></i> <!-- Ikon pengeluaran -->
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Total Pengeluaran Bulan Ini</h6>
                        <h6 class="font-extrabold mb-0">{{ $totalPengeluaran }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @elseif($role === Role::BENDAHARA_KELAS)

    <!-- Total Pemasukan -->
    <div class="col-12">
        <div class="card">
            <div class="card-body px-4 py-4-5">
                <div class="row">
                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                        <div class="stats-icon green mb-2">
                            <i class="iconly-boldWallet"></i> <!-- Ikon pemasukan -->
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                        <h6 class="text-muted font-semibold">Jumlah Pemasukan</h6>
                        <h6 class="font-extrabold mb-0">{{ $totalPemasukan}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

@elseif($role === Role::PEMBINA_OSIS)

<div class="col-12">
    <h5 class="mb-3">Galeri Foto Sekolah</h5>
</div>


<!-- Foto 1 -->
<div class="col-6 col-lg-3 col-md-4">
    <div class="card">
        <img src="{{ asset('images/sekolah/foto1.jpeg') }}"
             class="card-img-top"
             style="height: 180px; object-fit: cover;" alt="Foto Sekolah">
    </div>
</div>

<!-- Foto 2 -->
<div class="col-6 col-lg-3 col-md-4">
    <div class="card">
        <img src="{{ asset('images/sekolah/foto2.jpeg') }}"
             class="card-img-top"
             style="height: 180px; object-fit: cover;" alt="Foto Sekolah">
    </div>
</div>

<!-- Foto 3 -->
<div class="col-6 col-lg-3 col-md-4">
    <div class="card">
        <img src="{{ asset('images/sekolah/foto3.jpeg') }}"
             class="card-img-top"
             style="height: 180px; object-fit: cover;" alt="Foto Sekolah">
    </div>
</div>

<!-- Foto 4 -->
<div class="col-6 col-lg-3 col-md-4">
    <div class="card">
        <img src="{{ asset('images/sekolah/foto4.jpeg') }}"
             class="card-img-top"
             style="height: 180px; object-fit: cover;" alt="Foto Sekolah">
    </div>
</div>
<div class="alert alert-warning" role="alert">
SMK NEGERI 10 KOLAKA Adalah sekolah menengah yang terletak di Kabupaten Kolaka, Kecamatan Tanggetada yang dimana sekolah ini membuat kegiatan Jumat seribu (JUMSER) yang dimana yaitu pada setiap hari Jumat siswa di SMK Negeri 10 Kolaka mengumpulkan uang seribu rupiah yang dimana tujuannya untuk menumbuhkan semangat anak-anak serta belajar untuk bersedekah
</div>


    @endif
</div>
