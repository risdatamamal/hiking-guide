<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Authentication') }}</title>

    {{-- Scripts --}}
    <script src="{{ asset('themekit/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset('themekit/scripts/main.js') }}"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('themekit/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('themekit/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('themekit/css/glide.css') }}">
    <link rel="stylesheet" href="{{ asset('themekit/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('themekit/css/content-box.css') }}">
    <link rel="stylesheet" href="{{ asset('themekit/css/contact-form.css') }}">
    <link rel="stylesheet" href="{{ asset('themekit/css/media-box.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skin.css') }}">
    <link rel="icon" href="{{ asset('media/favicon.png') }}">
</head>

<body class="page-main">
    <div id="preloader"></div>

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

    <main>
        @yield('content')
    </main>

    <footer class="light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3>Alpins</h3>
                    <p>Somewhere between the bottom of the climb and the summit is the answer to the mystery why we
                        climb.</p>
                </div>
                <div class="col-lg-4">
                    <h3>Contacts</h3>
                    <ul class="icon-list icon-line">
                        <li>San Pellegrino, BG, Italy</li>
                        <li>hello@example.com</li>
                        <li>02 123 333 444</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="icon-links icon-social icon-links-grid social-colors">
                        <a class="facebook"><i class="icon-facebook"></i></a>
                        <a class="twitter"><i class="icon-twitter"></i></a>
                        <a class="instagram"><i class="icon-instagram"></i></a>
                        <a class="google"><i class="icon-google"></i></a>
                    </div>
                    <hr class="space-sm" />
                    <p>Subscribe to our newsletter of follow us on the social channels to stay tuned.</p>
                </div>
            </div>
        </div>
        <div class="footer-bar">
            <div class="container">
                <span>© 2019 Alpins - Hiking & Outdoor Template Handmade by <a href="https://schiocco.com"
                        target="_blank">schiocco.com</a>.</span>
                <span><a href="contacts.html">Contact us</a> | <a href="#">Privacy policy</a></span>
            </div>
        </div>
        <link rel="stylesheet" href="themekit/media/icons/iconsmind/line-icons.min.css">
        <script src="themekit/scripts/parallax.min.js"></script>
        <script src="themekit/scripts/glide.min.js"></script>
        <script src="themekit/scripts/magnific-popup.min.js"></script>
        <script src="themekit/scripts/tab-accordion.js"></script>
        <script src="themekit/scripts/imagesloaded.min.js"></script>
        <script src="themekit/scripts/progress.js" async></script>
        <script src="themekit/scripts/custom.js" async></script>
        <script src="themekit/scripts/contact-form/contact-form.js" async></script>
    </footer>
</body>

</html>
