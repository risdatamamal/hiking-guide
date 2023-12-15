@extends('layouts.app')

@section('content')
    <main>
        <section class="section-base">
            <div class="container">
                <div class="google-map" data-marker="media/marker.png">
                    @if ($contact->maps != null)
                        <iframe src={{ $contact->maps }} width="600" height="450" style="border: 0" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    @endif
                </div>
                <hr class="space" />
                <div class="row">
                    <div class="col-lg-8">
                        <div class="title">
                            <h2>Write us</h2>
                            <p>Contact us from here</p>
                        </div>
                        <form action="themekit/scripts/contact-form/contact-form.php" class="form-box form-ajax"
                            method="post" data-email="hiking-guide@gmail.com">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p>Name</p>
                                    <input id="name" name="name" placeholder="Name" type="text"
                                        class="input-text" required>
                                </div>
                                <div class="col-lg-6">
                                    <p>Email</p>
                                    <input id="email" name="email" placeholder="Email" type="email"
                                        class="input-text" required>
                                </div>
                            </div>
                            <p>Messagge</p>
                            <textarea id="messagge" name="messagge" class="input-textarea" placeholder="Write something ..." required></textarea>
                            <div class="form-checkbox">
                                <input type="checkbox" id="check" name="check" value="check" required>
                                <label for="check">You accept the terms of service and the privacy policy</label>
                            </div>
                            <button class="btn btn-sm" type="submit">Send messagge</button>
                            <div class="success-box">
                                <div class="alert alert-success">Congratulations. Your message has been sent successfully
                                </div>
                            </div>
                            <div class="error-box">
                                <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="title">
                            <h2>Contacts</h2>
                            <p>Information</p>
                        </div>
                        <ul class="text-list text-list-line">
                            <li><b>Address</b>
                                <hr />
                                @php
                                    $address = $contact->address;
                                    $addressWithBreaks = wordwrap($address, 65, '</br>', true);
                                    echo $addressWithBreaks;
                                @endphp
                            </li>
                            <li><b>Website</b>
                                <hr />
                                <p>{{ $contact->website }}</p>
                            </li>
                            <li><b>Email</b>
                                <hr />
                                <p>{{ $contact->email }}</p>
                            </li>
                            <li><b>Phone</b>
                                <hr />
                                <p>+{{ $contact->phone }}</p>
                            </li>
                            @if ($contact->whatsapp != null)
                                <li><b>Whatsapp</b>
                                    <hr />
                                    <a href="https://wa.me/{{ $contact->whatsapp }}">
                                        <p>+{{ $contact->whatsapp }}</p>
                                    </a>
                                </li>
                            @endif
                        </ul>
                        <hr class="space-sm" />
                        <div class="icon-links icon-social icon-links-grid social-colors-hover">
                            @if ($contact->instagram != null)
                                <a class="instagram" href="https://www.instagram.com/{{ $contact->instagram }}"><i
                                        class="icon-instagram"></i></a>
                            @endif
                            @if ($contact->facebook != null)
                                <a class="facebook" href="https://www.facebook.com/{{ $contact->facebook }}"><i
                                        class="icon-facebook"></i></a>
                            @endif
                            @if ($contact->youtube != null)
                                <a class="youtube" href="https://www.youtube.com/{{ $contact->youtube }}"><i
                                        class="icon-youtube"></i></a>
                            @endif
                            @if ($contact->twitter != null)
                                <a class="twitter" href="https://www.twitter.com/{{ $contact->twitter }}"><i
                                        class="icon-twitter"></i></a>
                            @endif
                            @if ($contact->linkedin != null)
                                <a class="linkedin" href="https://www.linkedin.com/{{ $contact->linkedin }}"><i
                                        class="icon-linkedin"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
