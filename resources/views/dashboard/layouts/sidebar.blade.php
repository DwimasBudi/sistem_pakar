
<nav id="navbar">
        <div class="logo-name">
            {{-- <div class="logo-image">
                <img src="img/1.png" alt="">
            </div> --}}

            <span class="logo_name">Admin Pakar</span>
        </div>
        <div class="menu-items">
            <ul class="nav-links" style="padding-left:0;">
                <li><a {{ Request::is("dashboard") ? "class=active" : "" }} href="/dashboard/">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="/">
                    <i class="uil uil-stethoscope-alt"></i>
                    <span class="link-name">Diagnosa</span>
                </a></li>
                <li><a {{ Request::is("dashboard/posts*") ? "class=active" : "" }} href="/dashboard/posts/">
                    <i class="uil uil-clipboard-alt"></i>
                    <span class="link-name">Riwayat Diagnosa</span>
                </a></li>
                <li><a {{ Request::is("dashboard/categories*") ? "class=active" : "" }} href="/dashboard/categories/">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Daftar Pengguna</span>
                </a></li>
                <li><a {{ Request::is("dashboard/visi-misi*") ? "class=active" : "" }} href="/dashboard/visi-misi/edit">
                   <i class="uil uil-hospital"></i>
                    <span class="link-name">Daftar Penyakit</span>
                </a></li>
                <li><a {{ Request::is("dashboard/sambutan*") ? "class=active" : "" }} href="/dashboard/sambutan/edit">
                    <i class="uil uil-heartbeat"></i>
                    <span class="link-name">Daftar Gejala</span>
                </a></li>
                <li><a {{ Request::is("dashboard/kontak*") ? "class=active" : "" }} href="/dashboard/kontak/edit">
                    <i class="uil uil-syringe"></i>
                    <span class="link-name">Basis Rules</span>
                </a></li>
            </ul>
            <ul class="logout-mode" style="padding-left:0;">
                <li>
                    <a href="/logout">
                        <i class="uil uil-signout"></i>
                        <span class="link-name">Logout</span>
                    </a>
                </li>
                {{-- <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li> --}}
            </ul>
        </div>
</nav>
