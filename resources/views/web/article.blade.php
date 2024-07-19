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
                    <h1>Blog details</h1>
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

        <div class="content blog-content-info">

            <!-- Blog Details -->

            <section class="blog-details">
                <div class="container">
                    <div class="row">
                        <div class="col-primary col-md-8">
                            <article class="post">
                                <header class="post-header">
                                    <h3>{{ $post->title }}</h3>
                                    <div class="blog-meta">
                                        <div class="author">
                                            <!-- by <a href="#">Craig David</a> -->
                                        </div>
                                        <div class="time">{{ $post->created_at->format('d M Y') }}</div>
                                    </div>
                                </header>
                                <div class="post-thumbnail">
                                    <img alt="{{ $post->alt_image }}" class="img-responsive" src="{{ asset('storage/'.$post->image.'') }}">
                                </div>
                                    {!! $post->body !!}
                            </article>
                        </div>
                        <div class="col-secondary col-md-4">
                            <div class="widget widget_recent_post">
                                <h3 class="widget-title">Recent Post</h3>
                                @foreach ($data as $item)
                                <article class="recent-post">
                                    <div class="recent-post-thumbnail">
                                        <a href="{{ route('blog-details', $item->id) }}">
                                            <img alt="{{ $item->alt_image }}" src="{{ asset('storage/'.$item->image.'') }}" class="wp-post-image">
                                        </a>
                                    </div>
                                    <div class="recent-post-body">
                                        <h4 class="recent-post-title">
                                            <a href="{{ route('blog-details', $item->id) }}">{{ $item->title }}</a>
                                        </h4>
                                        <div class="recent-post-time">{{ $item->created_at->format('d M Y') }}</div>
                                    </div>
                                </article>
                                @endforeach


                            </div>

                        </div>
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
