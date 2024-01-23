@extends('layouts.main')
@section('title', 'Contact')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/select2/dist/css/select2.min.css') }}">
    @endpush

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-mail bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Contacts') }}</h5>
                            <span>{{ __('Form of contact information') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('dashboard') }}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('contacts') }}">{{ __('Contacts') }}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- start message area-->
            @include('include.message')
            <!-- end message area-->
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h3>{{ __('Contacts Information') }}</h3>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('update-contact', $contact->id) }}"
                            enctype="multipart/form-data" onsubmit="return confirmUpdate()">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="maps">{{ __('Maps') }}<span class="text-red">*</span></label>
                                        <input id="maps" type="text"
                                            class="form-control @error('maps') is-invalid @enderror" name="maps"
                                            value="{{ $contact->maps }}" placeholder="Enter link maps company" required>
                                        <div class="help-block with-errors"></div>

                                        @error('maps')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="address">{{ __('Address') }}<span class="text-red">*</span></label>
                                        <input id="address" type="address"
                                            class="form-control @error('address') is-invalid @enderror" name="address"
                                            value="{{ $contact->address }}" placeholder="Enter company address" required>
                                        <div class="help-block with-errors"></div>

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="website">{{ __('Website') }}<span class="text-red">*</span></label>
                                        <input id="website" type="website"
                                            class="form-control @error('website') is-invalid @enderror" name="website"
                                            value="{{ $contact->website }}" placeholder="Enter company website" required>
                                        <div class="help-block with-errors"></div>

                                        @error('website')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">{{ __('Email') }}<span class="text-red">*</span></label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ $contact->email }}" placeholder="Enter email address" required>
                                        <div class="help-block with-errors"></div>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">{{ __('Phone') }}<span class="text-red">*</span></label>
                                        <input id="phone" type="phone"
                                            class="form-control @error('phone') is-invalid @enderror" name="phone"
                                            value="{{ $contact->phone }}" placeholder="Enter company phone" required>
                                        <div class="help-block with-errors"></div>

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="border-checkbox-section">
                                        <div class="border-checkbox-group border-checkbox-group-success">
                                            <input class="border-checkbox" type="checkbox" id="isWhatsapp">
                                            <label class="border-checkbox-label"
                                                for="isWhatsapp">{{ __('Use Whatsapp with this phone') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="instagram">{{ __('Instagram') }}</label>
                                        <div class="input-group input-group-danger">
                                            <span class="input-group-prepend"><label class="input-group-text"><i
                                                        class="ik ik-instagram"></i></label></span>
                                            <input id="instagram" type="instagram"
                                                class="form-control @error('instagram') is-invalid @enderror"
                                                name="instagram" value="{{ $contact->instagram }}"
                                                placeholder="Enter username instagram">
                                        </div>
                                        <div class="help-block with-errors"></div>

                                        @error('instagram')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook">{{ __('Facebook') }}</label>
                                        <div class="input-group input-group-primary">
                                            <span class="input-group-prepend"><label class="input-group-text"><i
                                                        class="ik ik-facebook"></i></label></span>
                                            <input id="facebook" type="facebook"
                                                class="form-control @error('facebook') is-invalid @enderror"
                                                name="facebook" value="{{ $contact->facebook }}"
                                                placeholder="Enter username facebook">
                                        </div>
                                        <div class="help-block with-errors"></div>

                                        @error('facebook')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="twitter">{{ __('Twitter') }}</label>
                                        <div class="input-group input-group-info">
                                            <span class="input-group-prepend"><label class="input-group-text"><i
                                                        class="ik ik-twitter"></i></label></span>
                                            <input id="twitter" type="twitter"
                                                class="form-control @error('twitter') is-invalid @enderror" name="twitter"
                                                value="{{ $contact->twitter }}" placeholder="Enter username twitter">
                                        </div>
                                        <div class="help-block with-errors"></div>

                                        @error('twitter')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="youtube">{{ __('Youtube') }}</label>
                                        <div class="input-group input-group-danger">
                                            <span class="input-group-prepend"><label class="input-group-text"><i
                                                        class="ik ik-youtube"></i></label></span>
                                            <input id="youtube" type="youtube"
                                                class="form-control @error('youtube') is-invalid @enderror" name="youtube"
                                                value="{{ $contact->youtube }}" placeholder="Enter username youtube">
                                        </div>
                                        <div class="help-block with-errors"></div>

                                        @error('youtube')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="whatsapp">{{ __('Whatsapp') }}</label>
                                        <div class="input-group input-group-success">
                                            <span class="input-group-prepend"><label class="input-group-text"><i
                                                        class="ik ik-whatsapp"></i></label></span>
                                            <input id="whatsapp" type="whatsapp"
                                                class="form-control @error('whatsapp') is-invalid @enderror"
                                                name="whatsapp" value="{{ $contact->whatsapp }}"
                                                placeholder="Enter number whatsapp">
                                        </div>
                                        <div class="help-block with-errors"></div>

                                        @error('whatsapp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="linkedin">{{ __('Linkedin') }}</label>
                                        <div class="input-group input-group-primary">
                                            <span class="input-group-prepend"><label class="input-group-text"><i
                                                        class="ik ik-linkedin"></i></label></span>
                                            <input id="linkedin" type="linkedin"
                                                class="form-control @error('linkedin') is-invalid @enderror"
                                                name="linkedin" value="{{ $contact->linkedin }}"
                                                placeholder="Enter username linkedin">
                                        </div>
                                        <div class="help-block with-errors"></div>

                                        @error('linkedin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            function confirmUpdate() {
                return confirm('Are you sure you want to update the contact information?');
            }
        </script>
    @endpush
@endsection
