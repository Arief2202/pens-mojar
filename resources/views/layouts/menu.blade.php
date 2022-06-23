<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link {{ (request()->is('/home')) ? 'active' : '' }}" href="/home">
        <i class="c-sidebar-nav-icon cil-home"></i>Home
    </a>
    {{-- <a class="c-sidebar-nav-link c-active" href="/super-admin-kelola-akun">
        <i class="c-sidebar-nav-icon cil-people"></i>Super Admin
    </a> --}}
    <a class="c-sidebar-nav-link {{ (request()->is('/riwayat')) ? 'active' : '' }}" href="/riwayat">
        <i class="c-sidebar-nav-icon cil-history"></i>Riwayat Pengadaan Modul
    </a>
    @if(auth()->user()->id_role == 3)
        <a class="c-sidebar-nav-link {{ (request()->is('/pengajuan-modul')) ? 'active' : '' }}" href="/pengajuan-modul">
            <i class="c-sidebar-nav-icon cil-book"></i>Pengadaan Modul
        </a>
    @endif
    @if (in_array(Auth::user()->id_role, [1, 2]))
    <a class="c-sidebar-nav-link {{ (request()->is('/set/kuota')) ? 'active' : '' }}" href="/set/kuota">
        <i class="c-sidebar-nav-icon cil-book"></i>Alokasi Kuota Prodi
    </a>
    @endif
    {{-- @if(auth()->user()->id_role == 1)
    <a class="c-sidebar-nav-link {{ (request()->is('/set/reviewer')) ? 'active' : '' }}" href="/pengajuan/modul">
        <i class="c-sidebar-nav-icon cil-people"></i>Set Tim Reviewer
    </a>
    @endif --}}
    <a class="c-sidebar-nav-link {{ (request()->is('/dokumen')) ? 'active' : '' }}" href="/under-maintain">
        <i class="c-sidebar-nav-icon cil-file"></i>Dokumen Pengadaan
    </a>
    <a class="c-sidebar-nav-link {{ (request()->is('/timeline')) ? 'active' : '' }}" href="/timeline">
        <i class="c-sidebar-nav-icon cil-calendar"></i>Timeline
    </a>
    {{-- <a class="c-sidebar-nav-link c-active" href="/detail-matkul">
        <i class="c-sidebar-nav-icon cil-book"></i>Detail Matkul
    </a> --}}
</li>
