
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
                <li><a {{ Request::is("dashboard/diagnosa*") ? "class=active" : "" }} href="/dashboard/diagnosa/">
                    <i class="uil uil-stethoscope-alt"></i>
                    <span class="link-name">Diagnosa</span>
                </a></li>
                <li><a {{ Request::is("dashboard/riwayat*") ? "class=active" : "" }} href="/dashboard/riwayat/">
                    <i class="uil uil-clipboard-alt"></i>
                    <span class="link-name">Riwayat Diagnosa</span>
                </a></li>
                <li><a {{ Request::is("dashboard/pengguna*") ? "class=active" : "" }} href="/dashboard/pengguna/">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Daftar Pengguna</span>
                </a></li>
                <li><a {{ Request::is("dashboard/kecanduan*") ? "class=active" : "" }} href="/dashboard/kecanduan/">
                   <i class="uil uil-hospital"></i>
                    <span class="link-name">Daftar Kecanduan</span>
                </a></li>
                <li><a {{ Request::is("dashboard/gejala*") ? "class=active" : "" }} href="/dashboard/gejala/">
                    <i class="uil uil-heartbeat"></i>
                    <span class="link-name">Daftar Gejala</span>
                </a></li>
                <li><a {{ Request::is("dashboard/basis-aturan*") ? "class=active" : "" }} href="/dashboard/basis-aturan/">
                    <i class="uil uil-syringe"></i>
                    <span class="link-name">Basis Aturan</span>
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
