@extends('layouts.app')

@section('content')
    <header class="header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920"
        data-bleed="0" data-image-src="http://via.placeholder.com/1920x1080" data-offset="0">
        <div class="container">
            <h1>Treks</h1>
            <h2>It feels good to be lost in the right direction</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Treks</a></li>
            </ol>
        </div>
    </header>
    <main>
        <section class="section-base section-color">
            <div class="container">
                <div class="maso-list gap-30" data-columns="3" data-columns-lg="2" data-columns-sm="1">
                    <div class="menu-inner">
                        <div><i class="menu-btn"></i><span>Menu</span></div>
                        <ul>
                            <li class="active"><a data-filter="maso-item" href="#">All</a></li>
                            <li><a data-filter="cat-1" href="#">Hiking</a></li>
                            <li><a data-filter="cat-2" href="#">Treking</a></li>
                            <li><a data-filter="cat-3" href="#">Canyoning</a></li>
                            <li><a data-filter="cat-4" href="#">Adventure</a></li>
                            <li><a class="maso-order" data-sort="asc"></a></li>
                        </ul>
                    </div>
                    <div class="maso-box">
                        <div class="maso-item cat-1">
                            <div class="cnt-box cnt-box-info boxed" data-href="treks-single.html">
                                <div class="extra-field">From $49</div>
                                <a href="treks-single.html" class="img-box"><img src="http://via.placeholder.com/800x500"
                                        alt="" /></a>
                                <div class="caption">
                                    <h2>Bianco Excursion</h2>
                                    <div class="cnt-info">
                                        <div><span>Days</span><span>3</span></div>
                                        <div><span>Group size</span><span>10</span></div>
                                        <div><span>Difficulty</span><span>Easy</span></div>
                                    </div>
                                    <p>
                                        Monte bianco is a mountain located in the deep nature and sourrounded by animals.
                                    </p>
                                    <div class="bottom-info">
                                        Monte bianco, Alpes, Italy
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="maso-item cat-2">
                            <div class="cnt-box cnt-box-info boxed" data-href="treks-single.html">
                                <div class="extra-field">From $99</div>
                                <a href="treks-single.html" class="img-box"><img src="http://via.placeholder.com/800x500"
                                        alt="" /></a>
                                <div class="caption">
                                    <h2>Civetta Trekking</h2>
                                    <div class="cnt-info">
                                        <div><span>Days</span><span>3</span></div>
                                        <div><span>Group size</span><span>8</span></div>
                                        <div><span>Difficulty</span><span>Easy</span></div>
                                    </div>
                                    <p>
                                        Civetta mountain is a mountain located in the nature and sourrounded by animals.
                                    </p>
                                    <div class="bottom-info">
                                        Civetta, Dolomiti, Italy
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="maso-item cat-1 cat-3 cat-4">
                            <div class="cnt-box cnt-box-info boxed" data-href="treks-single.html">
                                <div class="extra-field">From $49</div>
                                <a href="treks-single.html" class="img-box"><img src="http://via.placeholder.com/800x500"
                                        alt="" /></a>
                                <div class="caption">
                                    <h2>Nevegal Trekking</h2>
                                    <div class="cnt-info">
                                        <div><span>Days</span><span>3</span></div>
                                        <div><span>Group size</span><span>5</span></div>
                                        <div><span>Difficulty</span><span>Easy</span></div>
                                    </div>
                                    <p>
                                        Nevegal mountain is a mountain located in the nature and sourrounded by animals.
                                    </p>
                                    <div class="bottom-info">
                                        Nevegal, Alpes, Italy
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="maso-item cat-2">
                            <div class="cnt-box cnt-box-info boxed" data-href="treks-single.html">
                                <div class="extra-field">From $49</div>
                                <a href="treks-single.html" class="img-box"><img src="http://via.placeholder.com/800x500"
                                        alt="" /></a>
                                <div class="caption">
                                    <h2>Glacier expedition</h2>
                                    <div class="cnt-info">
                                        <div><span>Days</span><span>3</span></div>
                                        <div><span>Group size</span><span>10</span></div>
                                        <div><span>Difficulty</span><span>Easy</span></div>
                                    </div>
                                    <p>
                                        Glacial is a mountain glacier located in the deep nature and sourrounded by animals.
                                    </p>
                                    <div class="bottom-info">
                                        Gusela, Alpes, Franch
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="maso-item cat-1">
                            <div class="cnt-box cnt-box-info boxed" data-href="treks-single.html">
                                <div class="extra-field">From $79</div>
                                <a href="treks-single.html" class="img-box"><img src="http://via.placeholder.com/800x500"
                                        alt="" /></a>
                                <div class="caption">
                                    <h2>Family trip</h2>
                                    <div class="cnt-info">
                                        <div><span>Days</span><span>3</span></div>
                                        <div><span>Group size</span><span>10</span></div>
                                        <div><span>Difficulty</span><span>Easy</span></div>
                                    </div>
                                    <p>
                                        A trip for the whole family located in the deep nature and sourrounded by animals.
                                    </p>
                                    <div class="bottom-info">
                                        San Pellegrino, Alpes, Italy
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="maso-item cat-2">
                            <div class="cnt-box cnt-box-info boxed" data-href="treks-single.html">
                                <div class="extra-field">From $449</div>
                                <a href="treks-single.html" class="img-box"><img src="http://via.placeholder.com/800x500"
                                        alt="" /></a>
                                <div class="caption">
                                    <h2>Monte Excursion</h2>
                                    <div class="cnt-info">
                                        <div><span>Days</span><span>3</span></div>
                                        <div><span>Group size</span><span>10</span></div>
                                        <div><span>Difficulty</span><span>Easy</span></div>
                                    </div>
                                    <p>
                                        Monte Albert is a mountain located in the deep nature and sourrounded by animals.
                                    </p>
                                    <div class="bottom-info">
                                        Albert, Colorado, US
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="space" />
            </div>
        </section>
        <section class="section-base section-call">
            <div class="container">
                <div class="cnt-box cnt-call">
                    <i class="im-paper-plane"></i>
                    <div class="caption">
                        <h2>Booking and contacts</h2>
                        <p>
                            Would you like more info about other trips or you want to book a special excursion?
                        </p>
                        <a href="#" class="btn btn-xs">Contact us</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="icon-box icon-box-left">
                            <i class="im-thumb"></i>
                            <div class="caption">
                                <h3>Experienced team</h3>
                                <p>We always lived inside our amazing nature</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box icon-box-left">
                            <i class="im-icq"></i>
                            <div class="caption">
                                <h3>Easy joining</h3>
                                <p>Contact us and in 2 minutes you're booked</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box icon-box-left">
                            <i class="im-forest"></i>
                            <div class="caption">
                                <h3>Secret locations</h3>
                                <p>Discover hidden natural places with our tours</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
