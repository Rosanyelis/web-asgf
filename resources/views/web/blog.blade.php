@extends('web.layout.app')
@section('content')

<body>

    <!-- Loader -->
    @include('web.layout.loading')
    <!-- Header -->
    @include('web.layout.navigation')

    <div class="layout">

        <!-- Home -->

        <main class="main main-inner main-blog bg-blog" data-stellar-background-ratio="0.6">
            <div class="container">
                <header class="main-header">
                    <h1>Blog</h1>
                </header>
            </div>

            <!-- Lines -->

            <div class="page-lines">
                <div class="container">
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </main>

        <div class="content">

            <!-- Blog List  -->

            <section class="blog-list">
                <div class="container">
                    @foreach($posts as $item)
                        <article class="blog">
                            <div class="row">
                                <div class="blog-thumbnail col-md-8">
                                    <div class="blog-thumbnail-bg col-md-8 visible-md visible-lg"
                                        style="background-image: url('storage/{{ $item->image }}');"></div>
                                    <div class="blog-thumbnail-img visible-xs visible-sm">
                                        <img alt="{{ $item->alt_image }}" class="img-responsive" src="{{ asset('storage/'.$item->image.'') }}"></div>
                                </div>
                                <div class="blog-info col-md-4">
                                    <!-- <div class="blog-tags">
                                        <a href="">marketing</a>
                                        <a href="">technology</a>
                                        <a href="">design</a>
                                        <a href="">technology</a>
                                        <a href="">design</a>
                                    </div> -->
                                    <h3 class="blog-title">
                                        <a href="">{{ $item->title }}</a>
                                    </h3>
                                    <div class="blog-meta">
                                        <div class="time">{{ $item->created_at->format('d M Y') }}</div>
                                    </div>
                                    <div class="text-right"><a href="{{ route('blog-details', $item->slug) }}" class="read-more">Read more</a></div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                    <div class="text-center ">
                    {{ $posts->links() }}
                    </div>

                </div>
            </section>

            <!-- Footer -->

            @include('web.layout.footer')

            <!-- Lines -->

            <div class="page-lines">
                <div class="container">
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                    </div>
                    <div class="col-line col-xs-4">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
