@php
    use App\Enums\Role;
    $user = auth()->user();
@endphp

<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="">JUMSER</a>
                </div>
                <!-- theme toggle, biarin aja -->
            </div>
        </div>

        <div class="sidebar-menu">
            <ul class="menu">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-md">
                        <img src="{{ auth()->user()->photo ? asset('storage/' . auth()->user()->photo) : asset('./assets/compiled/jpg/2.jpg') }}">
                    </div>

                    {{-- tampilkan nama user sesuai guard --}}
                    <p class="font-bold ms-3 mb-0">Admin - akm</p>
                </div>
                <hr>


                <x-nav-link icon="bi-person-circle"
                    href="{{ route('profile')}}"
                    :active="request()->routeIs('profile')">
                    Profil
                </x-nav-link>

                <li class="sidebar-title">Navigasi Utama</li>


                {{-- ADMIN --}}

                <x-nav-link icon="bi-speedometer2"
                    href="{{ route('dashboard')}}"
                    :active="request()->routeIs('dashboard')">
                    Beranda
                </x-nav-link>

                <x-nav-link icon="bi-people-fill"
                    href="{{ route('kelas-table')}}"
                    :active="request()->routeIs('kelas-table')">
                    Kelas
                </x-nav-link>

                    <x-nav-link icon="bi-newspaper"
                        href="{{ route('user-table')}}"
                        :active="request()->routeIs('user-table')">
    Pengguna
                    </x-nav-link>

                    <x-nav-link icon="bi-camera-video-fill"
                        href="{{ route('siswa-table')}}"
                        :active="request()->routeIs('siswa-table')">
    Siswa
                    </x-nav-link>

                    <x-nav-link icon="bi-camera-video-fill"
                        href="{{ route('kas.mingguan.detail', ['mingguanId' => 1])}}"
                        :active="request()->routeIs('kas.mingguan.detail')">
    Kas Mingguan
                    </x-nav-link>

                <li class="sidebar-title">Akun</li>


                <x-nav-link icon="bi-box-arrow-right"
                    href="{{ route('logout')}}">
                    Keluar
                </x-nav-link>
            </ul>
        </div>
    </div>
</div>
