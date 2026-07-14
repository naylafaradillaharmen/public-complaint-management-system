<header>
    <nav>
        <div class="container">
            <div class="nav-brand">
                <h1>LAPOR!</h1>
            </div>

            <ul class="nav-menu">
                <li><a href="#hero">Beranda</a></li>
                <li><a href="#layanan">Tentang</a></li>
                <li><a href="#form-ngadu">Buat Aduan</a></li>
                <li><a href="#status">Cek Status</a></li>
            </ul>

            @guest
            <div class="nav-auth">
                <a href="{{ route('login') }}" class="btn btn-login" id="login">Login</a>
            </div>
            @else
            <div class="nav-auth">
                <div class="user-menu">
                    <button class="user-menu-btn">
                        <span class="user-icon">👽</span>
                        <span class="user-name">{{ Auth::user()->name }}</span>
                        <span class="user-arrow">▼</span>
                    </button>
                    <div class="dropdown-menu">
                        @if(Auth::user()->role === 'admin')
                        <a href="{{ route('dashboard.admin') }}" class="dropdown-item">
                            <span class="item-icon">✨</span>
                            Dashboard
                        </a>
                        @elseif(Auth::user()->role === 'user')
                        <a href="" class="dropdown-item">
                            <span class="item-icon">✨</span>
                            Profile
                        </a>
                        @endif
                        <a href="{{ route('my.complains') }}" class="dropdown-item">
                            <span class="item-icon">📄</span>
                            My Complains
                        </a>
                        <a href="{{ route('logout') }}" class="dropdown-item logout" onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                            <span class="item-icon">⛩️</span>
                            Logout

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </div>
                </div>
            </div>
            @endguest
        </div>
    </nav>
</header>