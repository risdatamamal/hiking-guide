<nav class="menu-classic menu-fixed @if (Route::currentRouteName() == 'home') menu-transparent light @endif align-right"
    data-menu-anima="fade-in">
    <div class="container">
        <div class="menu-brand">
            @if (Route::currentRouteName() == 'home')
                <a href="{{ route('home') }}">
                    <img class="logo-default scroll-hide" src="media/logo-white-blue.svg" alt="logo" />
                    <img class="logo-retina scroll-hide" src="media/logo-white-blue.svg" alt="logo" />
                    <img class="logo-default scroll-show" src="media/logo-white-solid.svg" alt="logo" />
                    <img class="logo-retina scroll-show" src="media/logo-white-solid.svg" alt="logo" />
                </a>
            @else
                <a href="{{ route('home') }}">
                    <img class="logo-default scroll-hide" src="media/logo-black-blue-solid.svg" alt="logo" />
                    <img class="logo-retina scroll-hide" src="media/logo-black-blue-solid.svg" alt="logo" />
                    <img class="logo-default scroll-show" src="media/logo-white-solid.svg" alt="logo" />
                    <img class="logo-retina scroll-show" src="media/logo-white-solid.svg" alt="logo" />
                </a>
            @endif
        </div>
        <i class="menu-btn"></i>
        <div class="menu-cnt">
            <ul id="main-menu">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="dropdown">
                    <a href="{{ route('about') }}">About</a>
                    <ul>
                        <li>
                            <a href="{{ route('team') }}">Team</a>
                        </li>
                        <li>
                            <a href="{{ route('shelter') }}">Shelter</a>
                        </li>
                        <li>
                            <a href="{{ route('history') }}">History</a>
                        </li>
                        <li>
                            <a href="{{ route('gallery') }}">Gallery</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('trek') }}">Treks</a>
                </li>
                <li>
                    <a href="{{ route('blog') }}">Blog</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contacts</a>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li class="dropdown">
                            <a href="{{ route('dashboard') }}">Dashboard</a>
                            <ul>
                                <li><a href="{{ url('logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @else
                    @endauth
                    @auth
                    @else
                        <li>
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                    @endauth
                @endif
            </ul>
            <div class="menu-right">
                <ul class="lan-menu">
                    <li class="dropdown">
                        <a href="#"><img src="media/en.png" />EN </a>
                        <ul>
                            <li><a href="#"><img src="media/it.png" />IT</a></li>
                            <li><a href="#"><img src="media/es.png" />ES</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
