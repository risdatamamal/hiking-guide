@extends('layouts.app')

@section('content')
    <header class="header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920"
        data-bleed="0" data-image-src="http://via.placeholder.com/1920x1080" data-offset="0">
        <div class="container">
            <h1>Our story</h1>
            <h2>Talent wins games, but teamwork win championships</h2>
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">History</a></li>
            </ol>
        </div>
    </header>
    <main>
        <section class="section-base">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="timeline">
                            <div>
                                <div class="badge">
                                    <p>1985</p><span>Foundation</span>
                                </div>
                                <div class="panel">
                                    <h3 class="timeline-title">Group fondation</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor
                                        incididunt utlabore et dolore magna aliqua.
                                        Utenim ad minim veniam rcitation ullamco laboris nisi ut aliquip.
                                    </p>
                                </div>
                            </div>
                            <div class="inverted">
                                <div class="badge">
                                    <p>1990</p><span>Association</span>
                                </div>
                                <div class="panel">
                                    <h3 class="timeline-title">Join of country association</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet corcitation ullamco laboris nisi ut aliquipnsected do
                                        eiusmod tempore artnesiano orte.
                                    </p>
                                </div>
                            </div>
                            <div>
                                <div class="badge">
                                    <p>2002</p><span>Exapansion</span>
                                </div>
                                <div class="panel">
                                    <h3 class="timeline-title">We are bigger</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectedrcitation ullamco laboris nisi ut aliquip re
                                        martllo artnesiano orte.
                                    </p>
                                </div>
                            </div>
                            <div class="inverted">
                                <div class="badge">
                                    <p>2010</p><span>Online</span>
                                </div>
                                <div class="panel">
                                    <h3 class="timeline-title">We are online!</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet crcitation ullamco laboris nisi ut aliquiponsected do
                                        eiusmod tempore martllo artnesiano orte.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="counter counter-vertical counter-icon">
                            <div>
                                <h3>Alive by</h3>
                                <div class="value">
                                    <span class="text-lg" data-to="25" data-speed="5000">25</span>
                                    <span>Years</span>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="counter counter-vertical counter-icon">
                            <div>
                                <h3>Traks length</h3>
                                <div class="value">
                                    <span class="text-lg" data-to="8000" data-speed="5000">8000</span>
                                    <span>km</span>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="counter counter-vertical counter-icon">
                            <div>
                                <h3>Team memebers</h3>
                                <div class="value">
                                    <span class="text-lg" data-to="110" data-speed="3000">110</span>
                                    <span>+</span>
                                </div>
                            </div>
                        </div>
                        <hr class="space" />
                        <ul class="slider" data-options="type:slider,nav:true,arrows:true,controls:out,perView:1">
                            <li>
                                <a class="img-box lightbox" href="http://via.placeholder.com/800x500"
                                    data-lightbox-anima="fade-left">
                                    <img src="http://via.placeholder.com/800x500" alt="">

                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="http://via.placeholder.com/800x500"
                                    data-lightbox-anima="fade-left">
                                    <img src="http://via.placeholder.com/800x500" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="http://via.placeholder.com/800x500"
                                    data-lightbox-anima="fade-left">
                                    <img src="http://via.placeholder.com/800x500" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base section-color">
            <div class="container">
                <ul class="slider"
                    data-options="type:carousel,perView:5,perViewMd:4,perViewSm:3,perViewXs:2,gap:70,autoplay:3500">
                    <li>
                        <img src="http://via.placeholder.com/374x103" alt="logo" />
                    </li>
                    <li>
                        <img src="http://via.placeholder.com/374x103" alt="logo" />
                    </li>
                    <li>
                        <img src="http://via.placeholder.com/374x103" alt="logo" />
                    </li>
                    <li>
                        <img src="http://via.placeholder.com/374x103" alt="logo" />
                    </li>
                    <li>
                        <img src="http://via.placeholder.com/374x103" alt="logo" />
                    </li>
                    <li>
                        <img src="http://via.placeholder.com/374x103" alt="logo" />
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection
