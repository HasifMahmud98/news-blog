{{-- @php
    dd($blogs);
@endphp --}}
@extends('frontend.inc.base')

@section('title')

@section('css')
@endsection

@section('content')
    <!-- Start Page Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>News without sidebar</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>News without sidebar</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Start News Area -->
    <section class="news-area ptb-50">
        <div class="container-fluid">
            <div class="row">

                @foreach ($blogs as $blog)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-news-item">
                            <div class="news-image">
                                <a href="{{ route('blog_view', $blog->id) }}">
                                    <img src="{{ asset($blog->thumbnail) }}" alt="image">
                                </a>
                            </div>

                            <div class="news-content mt-20">
                                <span>{{ $blog->category->title }}</span>
                                <h3>
                                    <a href="{{ route('blog_view', $blog->id) }}">{{ $blog->title }}</a>
                                </h3>
                                <p>{{ Str::limit($blog->description, 100, '...') }}</p>
                                <p><a href="#">{{ $blog->author }}</a> /
                                    {{ date('d M Y', strtotime($blog->created_at)) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


@endsection

@section('js')
    <script>
        $('#eventsCarousel').owlCarousel({
            items: 1,
            margin: 50,
            autoHeight: true,
            margin: 0,
            dots: false,
            center: true,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>',
                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
            ]
        });
    </script>
    <script>
        $('#slide-testimonal').owlCarousel({
            margin: 0,
            center: true,
            loop: true,
            // nav: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2,
                    margin: 15,
                },
                1000: {
                    items: 3,
                }
            }
        });
    </script>
    <script>
        $('.nav-item .home').addClass('active');
    </script>
@endsection
