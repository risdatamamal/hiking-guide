@extends('layouts.app')

@section('content')
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
                                <a href="treks-single.html" class="img-box"><img src="http://via.placeholder.com/800x500"
                                        alt="" /></a>
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
                                <a href="treks-single.html" class="img-box"><img src="http://via.placeholder.com/800x500"
                                        alt="" /></a>
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
    <section class="section-slider alpins-slider light section-full-width-left" data-slider-parallax="true"
        data-interval="0">
        <div class="background-slider">
            <div class="active" style="background-image:url(http://via.placeholder.com/1920x1080)"></div>
            <div style="background-image:url(http://via.placeholder.com/1920x1080)"></div>
            <div style="background-image:url(http://via.placeholder.com/1920x1080)"></div>
            <div style="background-image:url(http://via.placeholder.com/1920x1080)"></div>
            <div style="background-image:url(http://via.placeholder.com/1920x1080)"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="slider"
                        data-options="type:slider,nav:true,arrows:true,perView:3,perViewLg:2,perViewSm:1,gap:30,controls:out">
                        <li>
                            <a href="treks-single.html" class="media-box media-box-reveal" data-anima="scale"
                                data-trigger="hover">
                                <img class="anima" src="http://via.placeholder.com/800x1300" alt="">
                                <div class="caption">
                                    <h2>Bianco</h2>
                                    <div class="extra-field">From $95</div>
                                    <h3>Alpes, Italy</h3>
                                    <p>
                                        Lorem ipsum dolore consectetur adipisicing e ididunto pertinole.
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="treks-single.html" class="media-box media-box-reveal" data-anima="scale"
                                data-trigger="hover">
                                <img class="anima" src="http://via.placeholder.com/800x1300" alt="">
                                <div class="caption">
                                    <h2>Civetta</h2>
                                    <div class="extra-field">From $95</div>
                                    <h3>Dolomiti, Italy</h3>
                                    <p>
                                        Lorem ipsum dolore consectetur adipisicing e ididunto pertinole.
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="treks-single.html" class="media-box media-box-reveal" data-anima="scale"
                                data-trigger="hover">
                                <img class="anima" src="http://via.placeholder.com/800x1300" alt="">
                                <div class="caption">
                                    <h2>Teton</h2>
                                    <div class="extra-field">From $150</div>
                                    <h3>Wyoming, USA</h3>
                                    <p>
                                        Lorem ipsum dolore consectetur adipisicing e ididunto pertinole.
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="treks-single.html" class="media-box media-box-reveal" data-anima="scale"
                                data-trigger="hover">
                                <img class="anima" src="http://via.placeholder.com/800x1300" alt="">
                                <div class="caption">
                                    <h2>Corsica</h2>
                                    <div class="extra-field">From $50</div>
                                    <h3>Corsica, France</h3>
                                    <p>
                                        Lorem ipsum dolore consectetur adipisicing a didunto pertinole.
                                    </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="treks-single.html" class="media-box media-box-reveal" data-anima="scale"
                                data-trigger="hover">
                                <img class="anima" src="http://via.placeholder.com/800x1300" alt="">
                                <div class="caption">
                                    <h2>Norda</h2>
                                    <div class="extra-field">From $95</div>
                                    <h3>Monte Rosa, Italy</h3>
                                    <p>
                                        Lorem ipsum dolore consectetur adipisicing a didunto pertinole.
                                    </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6" data-anima="fade-left" data-time="2000">
                    <h1 class="text-lg text-uppercase text-black">The treks of our team</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiure consectetur adipisicing a
                        didunto persmo.
                    </p>
                    <a href="treks.html" class="btn btn-sm btn-circle">All treks</a>
                    <a href="team.html" class="btn btn-sm btn-circle btn-border">The team</a>
                    <hr class="space hidden-md" />
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
            <div class="title align-center">
                <h2>Newsletter</h2>
                <p>Subscribe now to our newsletter</p>
            </div>
            <form data-anima="fade-in" data-time="1000" action="HTWF/scripts/php/contact-form.php"
                class="form-box form-ajax form-inline align-center" method="post" data-email="example@domain.com">
                <div class="row">
                    <div class="col-lg-4">
                        <input id="name" name="name" placeholder="Name" type="text" class="input-text"
                            required>
                    </div>
                    <div class="col-lg-4">
                        <input id="email" name="email" placeholder="Email" type="email" class="input-text"
                            required>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-sm" type="submit">Subscribe</button>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-checkbox">
                            <input type="checkbox" id="check" name="check" value="check" required>
                            <label for="check">By click subscribe you accept the terms of service and the
                                privacy policy.</label>
                        </div>
                    </div>
                </div>
                <div class="success-box">
                    <div class="alert alert-success">Congratulations. You're now a subscriber!</div>
                </div>
                <div class="error-box">
                    <div class="alert alert-warning">Error, please retry. Your message has not been sent.</div>
                </div>
            </form>
        </div>
    </section>
@endsection
