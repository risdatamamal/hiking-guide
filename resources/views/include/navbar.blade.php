<nav class="menu-classic menu-fixed menu-transparent light align-right" data-menu-anima="fade-in">
    <div class="container">
        <div class="menu-brand">
            <a href="#">
                <img class="logo-default scroll-hide" src="media/logo-white-blue.svg" alt="logo" />
                <img class="logo-retina scroll-hide" src="media/logo-white-blue.svg" alt="logo" />
                <img class="logo-default scroll-show" src="media/logo-white-solid.svg" alt="logo" />
                <img class="logo-retina scroll-show" src="media/logo-white-solid.svg" alt="logo" />
            </a>
        </div>
        <i class="menu-btn"></i>
        <div class="menu-cnt">
            <ul id="main-menu">
                <li class="dropdown">
                    <a href="#">Home</a>
                    <ul>
                        <li><a href="index.html">Main</a></li>
                        <li><a href="index-2.html">Home two</a></li>
                        <li><a href="index-3.html">Home three</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Pages</a>
                    <ul>
                        <li class="dropdown-submenu">
                            <a>About</a>
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-2.html">Team two</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a>Special</a>
                            <ul>
                                <li><a href="food.html">Food</a></li>
                                <li><a href="shelters.html">Shelters</a></li>
                                <li><a href="events.html">Events</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a>Others</a>
                            <ul>
                                <li><a href="prices.html">Prices</a></li>
                                <li><a href="history.html">History</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="elements/components/buttons.html">Elements</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="treks.html">Treks</a>
                    <ul>
                        <li><a href="treks.html">Treks</a></li>
                        <li><a href="treks-single.html">Single trek</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blog.html">Blog</a>
                </li>
                <li>
                    <a href="contacts.html">Contacts</a>
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
