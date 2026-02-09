@extends('layout.app')

@section('title', 'Portfolio')

@section('content')

<style>

    .container { width: 100%; max-width: 1140px; margin: 0 auto; padding: 0 15px; }
    .row { display: flex; flex-wrap: wrap; margin: 0 -15px; }
    .col-lg-4 { flex: 0 0 33.333%; max-width: 33.333%; padding: 0 15px; }
    .col-md-6 { flex: 0 0 50%; max-width: 50%; padding: 0 15px; }
    .col-12 { flex: 0 0 100%; max-width: 100%; }
    .mt--30 { margin-top: 30px; }
    .text-center { text-align: center; }

    @media (max-width: 991px) { .col-lg-4 { flex: 0 0 50%; max-width: 50%; } }
    @media (max-width: 767px) { .col-lg-4, .col-md-6 { flex: 0 0 100%; max-width: 100%; } }


    .portfolio {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        background: #fff; 
    }

    .thumbnail-inner {
        position: relative;
        padding-top: 66.66%; 
        overflow: hidden;
    }


    .thumbnail-inner img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover; 
        transition: all 0.5s ease;
    }

 
    .bg-blr-image {
        filter: blur(20px);
        opacity: 0.6;
        z-index: 1;
        transform: scale(1.1); 
    }


    .thumbnail {
        z-index: 2;
    }


    .portfolio:hover .thumbnail {
        transform: scale(1.1); 
    }

    /* Content Overlay */
    .content {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; 
    

    display: flex;
    justify-content: center; 
    align-items: center;     
    
    background-color: rgba(0, 0, 0, 0.452); 
    z-index: 3;
    
    opacity: 0; 
    transition: all 0.4s ease;
    }
    .portfolio:hover .content {
        opacity: 1;
        transform: translateY(0);
    }
    .inner {
    text-align: center; 
    transform: translateY(20px); 
    transition: transform 0.4s ease;
    }
    .portfolio:hover .inner {     transform: translateY(0); }

    .content p { color: #00d09c; font-size: 14px; font-weight: 500; text-transform: uppercase; margin-bottom: 5px; }
    .content h4 { color: #fff; font-size: 20px; font-weight: 600; margin-bottom: 15px; }
    .content h4 a { color: #fff; text-decoration: none; }
    .content h4 a:hover { color: #00d09c; }

    .rn-btn {
        display: inline-block; padding: 8px 20px; background-color: #00d09c;
        color: #fff; font-size: 12px; border-radius: 5px; text-decoration: none;
    }
    .rn-btn:hover { background-color: #fff; color: #212121; }


    .portfolio-filter { display: flex; justify-content: center; gap: 15px; margin-bottom: 40px; }
    .filter-btn {
        background: transparent; border: none; font-size: 16px; font-weight: 500;
        color: #717173; cursor: pointer; padding: 5px 15px; transition: 0.3s;
    }
    .filter-btn.active, .filter-btn:hover { color: #212121; }
    .filter-btn.active { border-bottom: 2px solid #00d09c; }

    .hide-item { display: none; }
    .show-item { display: block; animation: fadeIn 0.5s forwards; }
    @keyframes fadeIn { to { opacity: 1; } }
</style>

   

    <!-- Start Portfolio Area -->
    <div class="rn-portfolio-area rn-section-gap bg_color--1" id="portfolio">
        <div class="container">
            
            <!-- Section Title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title section-title--3 text-center mb--30">
                        <h2 class="title">All My Projects</h2>
                        <p>Explore my complete collection of work. </p>
                    </div>
                </div>
            </div>

            <!-- Filter Buttons (Interactive) -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-filter">
                        <button class="filter-btn active" data-filter="all">All</button>
                        <button class="filter-btn" data-filter="leadership">Leadership</button>
                        <button class="filter-btn" data-filter="teambuilding">Team Building</button>
                        <button class="filter-btn" data-filter="coaching">Coaching</button>
                    </div>
                </div>
            </div>

            <!-- Portfolio Grid -->
            <div class="row" id="portfolio-grid">

                 {{-- @foreach(range(1, 6) as $i) --}}
                <!-- Start Single Portfolio 1 -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30 portfolio-item" data-category="leadership">
                    <div class="portfolio text-center">
                        <div class="thumbnail-inner">
                            <img src="{{ asset('assets/images/portfolio/leadership/1.jpeg') }}" class="thumbnail" alt="Project">
                            {{-- <div class="thumbnail image-1"></div> --}}
                            {{-- <div class="bg-blr-image image-1"></div> --}}
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>Leadership</p>
                                <h4><a href="#">bkash Leardership Excellence Program</a></h4>
                                <div class="portfolio-button">
                                    <a class="rn-btn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Portfolio  -->

                                <!-- Start Single Portfolio 2 -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30 portfolio-item" data-category="teambuilding">
                    <div class="portfolio text-center">
                        <div class="thumbnail-inner">
                            <img src="https://picsum.photos/seed/proj2/600/400" class="thumbnail" alt="Project">
                            {{-- <div class="thumbnail image-1"></div> --}}
                            {{-- <div class="bg-blr-image image-1"></div> --}}
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>Team Building</p>
                                <h4><a href="#">E-Commerce Platform</a></h4>
                                <div class="portfolio-button">
                                    <a class="rn-btn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Portfolio  -->
                                                <!-- Start Single Portfolio 2 -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30 portfolio-item" data-category="coaching">
                    <div class="portfolio text-center">
                        <div class="thumbnail-inner">
                            <img src="https://picsum.photos/seed/proj3/600/400" class="thumbnail" alt="Project">
                            {{-- <div class="thumbnail image-1"></div> --}}
                            {{-- <div class="bg-blr-image image-1"></div> --}}
                        </div>
                        <div class="content">
                            <div class="inner">
                                <p>Coaching</p>
                                <h4><a href="#">E-Commerce Platform</a></h4>
                                <div class="portfolio-button">
                                    <a class="rn-btn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Portfolio  -->
            {{-- @endforeach --}}

            </div>

            <!-- View More Button -->
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="view-more-btn mt--60 mt_sm--30 text-center">
                        <!-- In Laravel, this would be href="{{ route('projects') }}" -->
                        <a class="rn-button-style--2 btn_solid" href="#">Load More Projects</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- End Portfolio Area  -->

    <!-- Simple JavaScript for Filtering -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const portfolioItems = document.querySelectorAll('.portfolio-item');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', () => {

                    filterBtns.forEach(b => b.classList.remove('active'));

                    btn.classList.add('active');

                    const filterValue = btn.getAttribute('data-filter');

                    portfolioItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.classList.remove('hide-item');
                            item.classList.add('show-item');
                        } else {
                            item.classList.remove('show-item');
                            item.classList.add('hide-item');
                        }
                    });
                });
            });
        });
    </script>
@endsection