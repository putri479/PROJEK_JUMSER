        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                            <img src="{{ auth()->user()->photo ? asset('storage/' . (auth()->user()->photo ?? '')) : 'assets/images/faces/face1.jpg' }}"
                                alt="profile">
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2">{{ auth()->user()->name }}</span>
                            <span class="text-secondary text-small">{{ auth()->user()->role ?? '' }}</span>
                        </div>
                        <!-- <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> -->
                    </a>
                </li>

                <x-nav-link icon="bi-house" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    Dashboard
                </x-nav-link>

                <x-nav-link icon="bi-house" :href="route('kelas-table')" :active="request()->routeIs('kelas-table')">
                    Kelas
                </x-nav-link>

                <x-nav-link icon="bi-house" :href="route('siswa-table')" :active="request()->routeIs('siswa-table')">
                    Siswa
                </x-nav-link>



                <div class="border-bottom"></div>
                <x-nav-link icon="bi-person-circle" :href="route('profile')" :active="request()->routeIs('profile')">Profile </x-nav-link>

                <x-nav-link icon="bi-box-arrow-right" :href="route('logout')">
                    Logout
                </x-nav-link>



            </ul>
        </nav>
