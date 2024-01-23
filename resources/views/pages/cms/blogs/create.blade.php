@extends('layouts.main')
@section('title', 'Add Blog')
@section('content')
    <!-- push external head elements to head -->
    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/select2/dist/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/summernote/dist/summernote-bs4.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
    @endpush

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-file-text bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Blogs') }}</h5>
                            <span>{{ __('Form of blog content') }}</span>
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
                                <a href="{{ url('blogs') }}">{{ __('Blogs') }}</a>
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
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Blogs Content') }}</h3>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('store-blog') }}"
                            enctype="multipart/form-data" onsubmit="return confirmStore()">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="title">{{ __('Title') }}<span class="text-red">*</span></label>
                                        <input id="title" type="text"
                                            class="form-control @error('title') is-invalid @enderror" name="title"
                                            value="{{ old('title') }}" placeholder="Enter blog title" required>
                                        <div class="help-block with-errors"></div>

                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category">{{ __('Category') }}<span class="text-red">*</span></label>
                                        <input id="category" type="text"
                                            class="form-control @error('category') is-invalid @enderror" name="category"
                                            value="{{ old('category') }}" placeholder="Enter blog category" required>
                                        <div class="help-block with-errors"></div>

                                        @error('category')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="content">{{ __('Content') }}<span class="text-red">*</span></label>
                                        <textarea class="form-control html-editor" rows="10" name="content" id="content"></textarea>
                                        <div class="help-block with-errors"></div>

                                        @error('content')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="image">{{ __('Image') }}<span class="text-red">*</span></label>
                                        <p>* Note: Dimension 1080x1080 pixel</p>
                                        <img id="image-preview" class="d-block mb-2 img-fluid" src=""
                                            alt="Preview" />
                                        <input type="file" class="form-control" id="image_url" name="image_url"
                                            accept="image/*" onchange="previewImage()" />
                                        <div class="help-block with-errors"></div>

                                        @error('image_url')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- push external js -->
    @push('script')
        <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
        <script src="{{ asset('plugins/summernote/dist/summernote-bs4.min.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

        <script src="{{ asset('js/blogs.js') }}"></script>
        <script>
            function confirmStore() {
                return confirm('Are you sure you want to store the blog information?');
            }
        </script>
    @endpush
@endsection
