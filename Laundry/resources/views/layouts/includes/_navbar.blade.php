<header class="main_menu home_menu">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="#"> <img src="{{asset('images/logo3.png')}}" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    </button>

                    <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard">Dashboard</a>
                                </li>
                            @if(auth()->user()->role == 'admin')
                                <li class="nav-item">
                                    <a class="nav-link" href="/daftar-outlet">Daftar Outlet</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/daftar-kasir">Daftar Kasir</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/daftar-paket">Daftar Paket</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/daftar-owner">Daftar Owner</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/transaksiadmin">Transaksi</a>
                                </li>
                            @elseif(auth()->user()->role == 'kasir')
                                <li class="nav-item">
                                    <a class="nav-link" href="/registrasi-member">Daftar Member</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/pilih-paket">Pilih Paket</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/keranjang">Keranjang</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/transaksi">Transaksi</a>
                                </li>
                            @elseif(auth()->user()->role == 'owner')
                            <li class="nav-item">
                                <a class="nav-link" href="/transaksiowner">Transaksi</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <div class="cart">
                        <a href="/logout"><i class="fas fa-sign-out-alt"><span> Logout</span></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>