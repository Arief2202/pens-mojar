<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="/home-tim-pengusul">
        <i class="c-sidebar-nav-icon cil-home"></i>Home
    </a>
    {{-- <a class="c-sidebar-nav-link c-active" href="/super-admin-kelola-akun">
        <i class="c-sidebar-nav-icon cil-people"></i>Super Admin
    </a> --}}
    <a class="c-sidebar-nav-link c-active" href="/riwayat">
        <i class="c-sidebar-nav-icon cil-history"></i>Riwayat Pengadaan Modul
    </a>
    @if(auth()->user()->id_role == 3)
        <a class="c-sidebar-nav-link c-active" href="/pengajuan-modul">
            <i class="c-sidebar-nav-icon cil-book"></i>Pengadaan Modul
        </a>
    @endif
    <a class="c-sidebar-nav-link c-active" href="/dokumen-pengusul">
        <i class="c-sidebar-nav-icon cil-file"></i>Dokumen Pengadaan
    </a>
    <a class="c-sidebar-nav-link c-active" href="/timeline">
        <i class="c-sidebar-nav-icon cil-calendar"></i>Timeline
    </a>
    {{-- <a class="c-sidebar-nav-link c-active" href="/detail-matkul">
        <i class="c-sidebar-nav-icon cil-book"></i>Detail Matkul
    </a> --}}
</li>
