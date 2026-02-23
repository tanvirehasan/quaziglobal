@extends('layout.app')

@php
    $headTitle ='Portfolio';
    $title='Portfolio';
    $subTitle='Portfolio';
@endphp

@section('content')

<main class="page-wrapper">

{{-- ========================================= --}}
{{-- FEATURED PROJECTS --}}
{{-- ========================================= --}}

<div class="rn-portfolio-area rn-section-gap bg_color--1">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb--20">
                    <h2 class="title">Featured</h2>
                </div>
            </div>
        </div>

        <div class="row rn-slick-activation rn-slick-dot mt--10"
             data-slick-options='{
                "slidesToShow": 3,
                "slidesToScroll": 1,
                "arrows": false,
                "dots": true,
                "infinite": true
             }'
             data-slick-responsive='[
                {"breakpoint":890,"settings":{"slidesToShow":2}},
                {"breakpoint":590,"settings":{"slidesToShow":1}}
             ]'>

            @foreach($projects->where('is_featured', true) as $project)

                <div class="portfolio mt--30 mb--20">
                    <div class="thumbnail-inner">
                        <img src="{{ asset('storage/'.$project->featured_image) }}"
                             class="w-100"
                             style="height:250px; object-fit:cover;">
                    </div>

                    <div class="content">
                        <div class="inner">
                            <p>{{ $project->category }}</p>

                            <h4>
                                <a href="{{ route('project.show',$project->slug) }}">
                                    {{ $project->title }}
                                </a>
                            </h4>

                            <div class="portfolio-button">
                                <a class="rn-btn"
                                   href="{{ route('project.show',$project->slug) }}">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</div>



{{-- ========================================= --}}
{{-- ALL WORKS --}}
{{-- ========================================= --}}

<div class="rn-portfolio-area rn-section-gap bg_color--5">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb--20">
                    <h2 class="title">All Works</h2>
                </div>
            </div>
        </div>

        <div class="row">

            @foreach($projects as $project)

                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--40">

                    <div class="portfolio">
                        <a href="{{ route('project.show',$project->slug) }}">

                            <div class="thumbnail-inner">
                                <img src="{{ asset('storage/'.$project->featured_image) }}"
                                     class="w-100"
                                     style="height:250px; object-fit:cover;">
                            </div>

                            <div class="content">
                                <div class="inner">

                                    <p>{{ $project->category }}</p>

                                    <h4>{{ $project->title }}</h4>

                                    <div class="portfolio-button">
                                        <span class="rn-btn">
                                            Read More
                                        </span>
                                    </div>

                                </div>
                            </div>

                        </a>
                    </div>

                </div>

            @endforeach

        </div>

        {{-- Pagination --}}
        <div class="mt-4 text-center">
            {{ $projects->links() }}
        </div>

    </div>
</div>



{{-- ========================================= --}}
{{-- CAROUSEL SECTION --}}
{{-- ========================================= --}}

<div class="rn-portfolio-area rn-section-gap bg_color--1">
    <div class="container">

        <div class="section-title text-center mb--20">
            <h2 class="title">More Projects</h2>
        </div>

        <div class="portfolio-slick-activation rn-slick-activation rn-slick-dot mt--40"
             data-slick-options='{
                "slidesToShow": 5,
                "slidesToScroll": 1,
                "arrows": true,
                "dots": true,
                "infinite": true
             }'
             data-slick-responsive='[
                {"breakpoint":1200,"settings":{"slidesToShow":3}},
                {"breakpoint":768,"settings":{"slidesToShow":2}},
                {"breakpoint":480,"settings":{"slidesToShow":1}}
             ]'>

            @foreach($projects as $project)

                <div class="portfolio">
                    <div class="thumbnail-inner">
                        <img src="{{ asset('storage/'.$project->featured_image) }}"
                             class="w-100"
                             style="height:200px; object-fit:cover;">
                    </div>

                    <div class="content text-center mt-2">
                        <h6>
                            <a href="{{ route('project.show',$project->slug) }}">
                                {{ $project->title }}
                            </a>
                        </h6>
                    </div>
                </div>

            @endforeach

        </div>

    </div>
</div>


</main>

@endsection