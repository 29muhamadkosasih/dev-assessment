<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        {{-- <span class="app-brand-logo demo"> --}}
            <img src="{{ asset('assets/img/favicon/lgo.png') }}" width="110" height="90" alt
                class="me-3 ms-3 h-auto text-right" />

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        @can('home.index')
        <li class="menu-item {{ (request()->is('home')) ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Home">Home</div>
            </a>
        </li>
        @endcan

        @can('dashboard.index')
        <li class="menu-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
            <a href="{{ route('dashboard.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        @endcan

        @canany(['layout.empty.index'])
        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Apps &amp; Pages</span>
        </li>

        @can('layout.empty.index')
        <li class="menu-item {{ Route::currentRouteNamed('layout.empty') ? 'active' : '' }}">
            <a href="{{ route('layout.empty') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Layout Empty">Layout Empty</div>
            </a>
        </li>
        @endcan
        @endcanany

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pendaftaran</span>
        </li>

        {{-- @can('apl_01.index')
        <li class="menu-item {{ Route::currentRouteNamed('apl_01.index') ? 'active' : '' }}">
            <a href="{{ route('apl_01.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-arrow-loop-right-2"></i>
                <div data-i18n="APL-01">APL-01</div>
            </a>
        </li>
        @endcan --}}

        {{-- @can('apl_01.create') --}}
        <li class="menu-item {{ Route::currentRouteNamed('apl_01.create') ? 'active' : '' }}">
            <a href="{{ route('apl_01.create') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-box-multiple-1"></i>
                <div data-i18n="APL-01">APL-01</div>
            </a>
        </li>
        {{-- @endcan --}}

        <li class="menu-item {{ Route::currentRouteNamed('validasi.index', 'validasi.show') ? 'active' : '' }}">
            <a href="{{ route('validasi.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-loader-3"></i>
                <div data-i18n="Validasi APL-01">Validasi APL-01</div>
            </a>
        </li>

        <li class="menu-item {{ Route::currentRouteNamed('apl_02.index') ? 'active' : '' }}">
            <a href="{{ route('apl_02.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-box-multiple-2"></i>
                <div data-i18n="APL-02">APL-02</div>
            </a>
        </li>

        <li class="menu-item {{ Route::currentRouteNamed('validasi02.index', 'validasi02.show') ? 'active' : '' }}">
            <a href="{{ route('validasi02.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-badges"></i>
                <div data-i18n="Validasi APL-02">Validasi APL-02</div>
            </a>
        </li>

        @canany(['fr_ak_04.index', 'fr_ak_04.index'])
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Perangkat Asesmen</span>
        </li>

        @can('fr_ak_01.index')
        <li
            class="menu-item {{ Route::currentRouteNamed('fr_ak_01.index','fr_ak_01.show','fr_ak_01.edit' ,'fr_ak_01.create') ? 'active' : '' }}">
            <a href="{{ route('fr_ak_01.create') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-box-model"></i>
                <div data-i18n="FR. AK-01 Persetujuan Asesmen dan Kerahasiaan">FR. AK-01 Persetujuan Asesmen dan
                    Kerahasiaan</div>
            </a>
        </li>
        @endcan

        @can('fr_ak_02.index')
        <li
            class="menu-item {{ Route::currentRouteNamed('fr_ak_02.index','fr_ak_02.show','fr_ak_02.edit' ,'fr_ak_02.create') ? 'active' : '' }}">
            <a href="{{ route('fr_ak_02.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-brand-airtable"></i>
                <div data-i18n="FR. AK-02 Formulir Rekaman Asesmen Kompetensi">FR. AK-02 Formulir Rekaman Asesmen
                    Kompetensi</div>
            </a>
        </li>
        @endcan

        @can('fr_ak_03.index')
        <li
            class="menu-item {{ Route::currentRouteNamed('fr_ak_03.index','fr_ak_03.show','fr_ak_03.edit' ,'fr_ak_03.create') ? 'active' : '' }}">
            <a href="{{ route('fr_ak_03.create') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-brand-campaignmonitor"></i>
                <div data-i18n="FR. AK-03 Umpan Balik Dan Catatan">FR. AK-03 Umpan Balik Dan Catatan</div>
            </a>
        </li>
        @endcan

        @can('fr_ak_04.index')
        <li
            class="menu-item {{ Route::currentRouteNamed('fr_ak_04.index','fr_ak_04.show','fr_ak_04.edit' ,'fr_ak_04.create') ? 'active' : '' }}">
            <a href="{{ route('fr_ak_04.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-brand-couchdb"></i>
                <div data-i18n="FR. AK-04 Banding Asesmen">FR. AK-04 Banding Asesmen</div>
            </a>
        </li>
        @endcan


        @can('fr_ak_05.index')
        <li
            class="menu-item {{ Route::currentRouteNamed('fr_ak_05.index','fr_ak_05.show','fr_ak_05.edit' ,'fr_ak_05.create') ? 'active' : '' }}">
            <a href="{{ route('fr_ak_05.create') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-box-multiple"></i>
                <div data-i18n="FR. AK-05 Laporan Asesmen">FR. AK-05 Laporan Asesmen</div>
            </a>
        </li>
        @endcan

        @can('fr_ak_06.index')
        <li
            class="menu-item {{ Route::currentRouteNamed('fr_ak_06.index','fr_ak_06.show','fr_ak_06.edit' ,'fr_ak_06.create') ? 'active' : '' }}">
            <a href="{{ route('fr_ak_06.create') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-chalkboard"></i>
                <div data-i18n="FR. AK-06 Meninjau Proses Asesmen">FR. AK-06 Meninjau Proses Asesmen</div>
            </a>
        </li>
        @endcan
        @endcanany
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Master Data</span>
        </li>

        @can('bank.index')
        <li class="menu-item {{ (request()->is('bank')) ? 'active' : '' }}">
            <a href="{{ route('bank.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-tool"></i>
                <div data-i18n="Bank">Bank</div>
            </a>
        </li>
        @endcan

        <li
            class="menu-item {{ Route::currentRouteNamed('kompetensi.index','kompetensi.show','kompetensi.edit','kompetensi.create') ? 'active' : '' }}">
            <a href="{{ route('kompetensi.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-arrows-double-nw-se"></i>
                <div data-i18n="Kompentensi APL-01">Kompentensi APL-01</div>
            </a>
        </li>

        <li
            class="menu-item {{ Route::currentRouteNamed('kompetensi02.index','kompetensi02.show','kompetensi02.edit','kompetensi02.create') ? 'active' : '' }}">
            <a href="{{ route('kompetensi02.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-arrows-double-se-nw"></i>
                <div data-i18n="Kompentensi APL-02">Kompentensi APL-02</div>
            </a>
        </li>

        <li class="menu-item {{ Route::currentRouteNamed('skema.index','skema.show','skema.edit') ? 'active' : '' }}">
            <a href="{{ route('skema.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-ballpen"></i>
                <div data-i18n="Skema">Skema</div>
            </a>
        </li>

        @canany(['users.index','roles.index','permissions.index'])
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Users Management</span>
        </li>

        @can('users.index')
        <li class="menu-item {{ Route::currentRouteNamed('users.index','users.show','users.edit') ? 'active' : '' }}">
            <a href="{{ route('users.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Users">Users</div>
            </a>
        </li>
        @endcan

        @can('roles.index')
        <li class="menu-item {{ Route::currentRouteNamed('roles.index','roles.show','roles.edit') ? 'active' : '' }}">
            <a href="{{ route('roles.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Roles">Roles</div>
            </a>
        </li>
        @endcan


        @can('permissions.index')
        <li
            class="menu-item {{ Route::currentRouteNamed('permissions.index','permissions.show','permissions.edit') ? 'active' : '' }}">
            <a href="{{ route('permissions.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-checkbox"></i>
                <div data-i18n="Permissions">Permissions</div>
            </a>
        </li>
        @endcan

        @endcanany
    </ul>
    <footer class="content-footer footer bg-footer-theme" style="background-color: #7367F0">
        <ul class="menu-inner py-2">
            <li class="menu-item">
                <a href="#" onclick="$('#logout-form').submit();" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-logout " style="color: black"></i>
                    <div data-i18n="Logout" style="color: black">Logout</div>
                </a>
            </li>
        </ul>
    </footer>
</aside>