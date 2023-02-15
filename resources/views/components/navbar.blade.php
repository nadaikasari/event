<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <br>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                    <img src="{{url('img/avatars/profile.jpg')}}" class="avatar img-fluid rounded-circle mr-1"
                        alt="user_name" />
                    <span class="text-dark">Mahasiswa</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    {{-- <a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </i> Ubah Password
                    </a> --}}
                    <a class="dropdown-item" href="/setting"><i class="align-middle mr-2 mb-1" data-feather="unlock">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-unlock">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                            </svg>
                        </i>Edit Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item logout" data-url="/logout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-log-out">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        Keluar
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
