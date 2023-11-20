@extends('layouts.app')

@section('content')
    <main>
        <section class="section-image section-full-width-right light ken-burn-center" data-parallax="scroll"
            data-image-src="http://via.placeholder.com/1920x1080">
            <div class="container">
                <hr class="space-lg" />
                <hr class="space-sm" />
                <div class="row">
                    <div class="col-lg-6">
                        <h1 data-anima="fade-left" data-time="2000" class="text-lg text-uppercase text-black">Amazing
                            mountain to explore</h1>
                        <hr class="space-lg" />
                        <hr class="space-sm hidden-lg" />
                        <ul class="slider width-50" data-options="type:slider,perView:1">
                            <li>
                                <p class="quote">
                                    Do not follow where the path may lead. Go instead where there is no path and leave a
                                    trail.
                                    <span class="quote-author">Ralph Emerson</span>
                                </p>
                            </li>
                            <li>
                                <p class="quote">
                                    When everything feels like an uphill struggle. Just wait and think of the view from
                                    the top.
                                    <span class="quote-author">Wislawa Symborska</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <hr class="space-xs" />
                        <div class="counter counter-vertical counter-icon">
                            <div>
                                <h3>Altitude</h3>
                                <div class="value">
                                    <span class="text-md" data-to="1650" data-speed="5000">1650</span>
                                    <span>m</span>
                                </div>
                            </div>
                        </div>
                        <hr class="space-sm" />
                        <div class="counter counter-vertical counter-icon">
                            <div>
                                <h3>Tracks</h3>
                                <div class="value">
                                    <span class="text-md" data-to="7" data-speed="5000">7</span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <hr class="space-sm" />
                        <div class="counter counter-vertical counter-icon">
                            <div>
                                <h3>Tourists / year</h3>
                                <div class="value">
                                    <span class="text-md" data-to="2000" data-speed="5000">2000</span>
                                    <span>+</span>
                                </div>
                            </div>
                        </div>
                        <hr class="space" />
                        <ul class="slider"
                            data-options="type:carousel,nav:true,perView:3,perViewLg:2,perViewSm:1,gap:30,controls:out,autoplay:3000">
                            <li>
                                <a class="img-box btn-video lightbox" href="https://www.youtube.com/watch?v=Lb4IcGF5iTQ"
                                    data-lightbox-anima="fade-top">
                                    <img src="http://via.placeholder.com/800x500" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="http://via.placeholder.com/800x500"
                                    data-lightbox-anima="fade-top">
                                    <img src="http://via.placeholder.com/800x500" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="http://via.placeholder.com/800x500"
                                    data-lightbox-anima="fade-top">
                                    <img src="http://via.placeholder.com/800x500" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="http://via.placeholder.com/800x500"
                                    data-lightbox-anima="fade-top">
                                    <img src="http://via.placeholder.com/800x500" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="space-lg" />
            </div>
        </section>
        <section class="section-base">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="slider controls-right"
                            data-options="type:carousel,nav:true,perView:2,perViewSm:1,gap:30,controls:out">
                            <li>
                                <div class="cnt-box cnt-box-info" data-href="treks-single.html">
                                    <div class="extra-field">From $49</div>
                                    <a href="treks-single.html" class="img-box"><img
                                            src="http://via.placeholder.com/800x500" alt="" /></a>
                                    <div class="caption">
                                        <h2>Bianco Excursion</h2>
                                        <div class="cnt-info">
                                            <div><span>Days</span><span>3</span></div>
                                            <div><span>Group size</span><span>10</span></div>
                                            <div><span>Difficulty</span><span>Easy</span></div>
                                        </div>
                                        <p>
                                            Monte bianco is a mountain located in the deep nature and rivers.
                                        </p>
                                        <div class="bottom-info">
                                            Monte bianco, Alpes, Italy
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cnt-box cnt-box-info" data-href="treks-single.html">
                                    <div class="extra-field">From $89</div>
                                    <a href="treks-single.html" class="img-box"><img
                                            src="http://via.placeholder.com/800x500" alt="" /></a>
                                    <div class="caption">
                                        <h2>Civetta Trekking</h2>
                                        <div class="cnt-info">
                                            <div><span>Days</span><span>5</span></div>
                                            <div><span>Group size</span><span>5</span></div>
                                            <div><span>Difficulty</span><span>Medium</span></div>
                                        </div>
                                        <p>
                                            Civetta is a mountain located in alps and is one of the most famous.
                                        </p>
                                        <div class="bottom-info">
                                            Civetta, Alpes, Italy
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cnt-box cnt-box-info" data-href="treks-single.html">
                                    <div class="extra-field">From $89</div>
                                    <a href="treks-single.html" class="img-box"><img
                                            src="http://via.placeholder.com/800x500" alt="" /></a>
                                    <div class="caption">
                                        <h2>Nevegal Trekking</h2>
                                        <div class="cnt-info">
                                            <div><span>Days</span><span>1</span></div>
                                            <div><span>Group size</span><span>15</span></div>
                                            <div><span>Difficulty</span><span>Medium</span></div>
                                        </div>
                                        <p>
                                            Nevegal is a mountain near a great and friendly mountain village.
                                        </p>
                                        <div class="bottom-info">
                                            Civetta, Alpes, Italy
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <hr class="space-sm visible-sm" />
                        <div class="title">
                            <h2>Latest trips</h2>
                            <p>Explore the unexplored world</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt
                            utlabore et dolore magna aliqua.
                            Utenim ad minim veniam quiso.
                        </p>
                        <a href="contacts.html" class="btn btn-circle btn-xs">Join us now</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base section-color">
            <div class="container">
                <div class="title align-center align-left-md">
                    <h2>About us</h2>
                    <p>We live for the nature</p>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elitsed do esectetur adipiscing elitsed do
                            eiusmoiusmod tempor incididunt utlabore et dolore magna aliqua.
                            Utenim ad minim veniam quis nostrud exercitation ullamco laboris scing elitsed do esectetur
                            adipiscing elite nature.
                        </p>
                    </div>
                    <div class="col-lg-3 no-margin-md">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing el adipiscing sscing elitsed do esectetur
                            adipiscing eliectetur adipiscing elitsed do eiusmoelitsed do eiusmod tempor incididusmod
                            titsed do eiusmod tempore.
                        </p>
                        <hr class="space-sm" />
                        <a href="about.html" class="btn-text">Read more</a>
                    </div>
                    <div class="col-lg-6">
                        <ul class="accordion-list" data-open="1">
                            <li>
                                <a href="#">Our mountains and our location</a>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor
                                        incididunt utlabore et dolore magna aliqua.
                                        Utenim ad minim veniam quis nostrud exercitation.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a href="#">About our treks and trips</a>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor
                                        incididunt utlabore et dolore magna aliqua.
                                        Utenim ad minim veniam quis nostrud exercitation .
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a href="#">About our team and guests</a>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor
                                        incididunt utlabore et dolore magna aliqua.
                                        Utenim ad minim veniam quis nostrud exercitation.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-image light" data-parallax="true" data-natural-height="1080" data-natural-width="1920"
            data-bleed="100" data-image-src="http://via.placeholder.com/1920x1080">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="progress-bar">
                            <h4>Experts only treks</h4>
                            <div>
                                <div data-progress="50">
                                    <span class="counter" data-to="50" data-speed="2000" data-unit="%">50%</span>
                                </div>
                            </div>
                        </div>
                        <hr class="space-sm" />
                        <div class="progress-bar">
                            <h4>Emotions and fun</h4>
                            <div>
                                <div data-progress="100">
                                    <span class="counter" data-to="100" data-speed="2000" data-unit="%">100%</span>
                                </div>
                            </div>
                        </div>
                        <hr class="space-sm" />
                        <div class="progress-bar">
                            <h4>Treks avarage difficulty</h4>
                            <div>
                                <div data-progress="70">
                                    <span class="counter" data-to="70" data-speed="2000" data-unit="%">70%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="title">
                            <h2>Top experiences</h2>
                            <p>We know how to do it</p>
                        </div>
                        <p>Lorem ipsum dolor sit ame tion ullamco laboris nisi ut aliqure in reprehenderit ma quiese nostrud
                            exercitation iconsectetur adipiscing elitsed do eiusmo fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base">
            <div class="container">
                <div class="title align-center">
                    <h2>Top service</h2>
                    <p>We provide the best experience</p>
                </div>
                <table class="table table-grid table-border table-6-md">
                    <tbody>
                        <tr>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-foot-2"></i>
                                    <div class="caption">
                                        <h3>Experienced team</h3>
                                        <p>We always lived inside our amazing nature</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-icq"></i>
                                    <div class="caption">
                                        <h3>Easy joining</h3>
                                        <p>Contact us and in 2 minutes you're booked</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-landscape"></i>
                                    <div class="caption">
                                        <h3>Expert hikers</h3>
                                        <p>Our mountans teached us everything we know</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-forest"></i>
                                    <div class="caption">
                                        <h3>Secret locations</h3>
                                        <p>Discover hidden natural places with our tours</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-flag-4"></i>
                                    <div class="caption">
                                        <h3>Europe locations</h3>
                                        <p>We provide trips on varous europe countries</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-map2"></i>
                                    <div class="caption">
                                        <h3>Visit us</h3>
                                        <p>We are in the north of italy near the mountains</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-globe"></i>
                                    <div class="caption">
                                        <h3>United States</h3>
                                        <p>Once a year join us to the other part of the world</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-rainbow-2"></i>
                                    <div class="caption">
                                        <h3>Great waterfall</h3>
                                        <p>Our excursions will bring you to great waterfalls</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="section-base section-color">
            <div class="container">
                <div class="title">
                    <h2>Huts and shelters</h2>
                    <p>Secret wild locations</p>
                </div>
                <div class="grid-list pagination-top-right" data-columns="4" data-columns-lg="3" data-columns-md="2"
                    data-columns-sm="1">
                    <div class="grid-box">
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-badge boxed">
                                <a href="#" class="img-box"><img src="http://via.placeholder.com/800x500"
                                        alt="" /></a>
                                <div class="caption">
                                    <div class="badge">1780m</div>
                                    <h2>Sennes</h2>
                                    <p>
                                        <b>Mail</b> info@domain.com<br />
                                        <b>Phone</b> +02 0444 123456<br />
                                        <b>Web</b> sennes.com
                                    </p>
                                    <a href="#" class="btn-text">Visit website</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-badge boxed">
                                <a href="#" class="img-box"><img src="http://via.placeholder.com/800x500"
                                        alt="" /></a>
                                <div class="caption">
                                    <div class="badge">1600m</div>
                                    <h2>Lavarella</h2>
                                    <p>
                                        <b>Mail</b> info@domain.com<br />
                                        <b>Phone</b> +02 0444 123456<br />
                                        <b>Web</b> lavarella.com
                                    </p>
                                    <a href="#" class="btn-text">Visit website</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-badge boxed">
                                <a href="#" class="img-box"><img src="http://via.placeholder.com/800x500"
                                        alt="" /></a>
                                <div class="caption">
                                    <div class="badge">1880m</div>
                                    <h2>Lagazui</h2>
                                    <p>
                                        <b>Mail</b> info@domain.com<br />
                                        <b>Phone</b> +02 0444 123456<br />
                                        <b>Web</b> lagazui.com
                                    </p>
                                    <a href="#" class="btn-text">Visit website</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-badge boxed">
                                <a href="#" class="img-box"><img src="http://via.placeholder.com/800x500"
                                        alt="" /></a>
                                <div class="caption">
                                    <div class="badge">1300m</div>
                                    <h2>Croda del lago</h2>
                                    <p>
                                        <b>Mail</b> info@domain.com<br />
                                        <b>Phone</b> +02 0444 123456<br />
                                        <b>Web</b> crodalago.com
                                    </p>
                                    <a href="#" class="btn-text">Visit website</a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-badge boxed">
                                <a href="#" class="img-box"><img src="http://via.placeholder.com/800x500"
                                        alt="" /></a>
                                <div class="caption">
                                    <div class="badge">1200m</div>
                                    <h2>Voce Mis</h2>
                                    <p>
                                        <b>Mail</b> info@example.com<br />
                                        <b>Phone</b> +02 0444 123456<br />
                                        <b>Web</b> mis.com
                                    </p>
                                    <a href="#" class="btn-text">Visit website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-pagination">
                        <ul class="pagination align-center" data-page-items="4" data-page-items-lg="3"
                            data-page-items-md="2" data-pagination-anima="fade-right"></ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
