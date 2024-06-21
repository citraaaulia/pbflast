<nav>
    <div class="container">
        <div class="sidebar">
            <div class="menu-btn">
                <i class="ph-bold ph-caret-left"></i>
            </div>
            <div class="head">
                <div class="user-img">
                    <img src="img.png" alt="Citra Aulia">
                </div>
                <div class="user-details">
                    <p class="title">Tata Usaha</p>
                    <p class="name">Citra Aulia</p>
                </div>
            </div>
            <div class="nav">
                <div class="menu">
                    <p class="title">Main</p>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-house-simple"></i>
                                <span class="text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-file-text"></i>
                                <span class="text">Pengajuan Peminjaman</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#">
                                <i class="icon ph-bold ph-chart-bar"></i>
                                <span class="text">Riwayat Pengajuan</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a class="nav-link {{ ($title === 'Riwayat Disposisi') ? 'active' : '' }}" href="{{ route('riwayat.pending') }}">
                                        <span class="text">Disposisi</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link {{ ($title === 'Riwayat Ditolak') ? 'active' : '' }}" href="{{ route('riwayat.ditolak') }}">
                                        <span class="text">Ditolak</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link {{ ($title === 'Riwayat Selesai') ? 'active' : '' }}" href="{{ route('riwayat.selesai') }}">
                                        <span class="text">Selesai</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-info"></i>
                                <span class="text">Manajemen Kalender</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-info"></i>
                                <span class="text">Laporan</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="menu">
                    <p class="title">Account</p>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-sign-out"></i>
                                <span class="text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>