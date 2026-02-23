@extends('layout.app')

@section('title', 'Home')

@section('content')
   

    <!-- Start Slider Area  -->
    @if($header)
        <div class="rn-slider-area" id="home">
            <!-- Start Single Slide  -->
            <div style="background-image: url('{{ asset('storage/'.$header->background_image) }}');
            background-position: fixed; background-repeat: no-repeat;  background-size: cover;  background-position: center center;"
                class="slide personal-portfolio-slider slider-paralax slider-style-3 dark-slider d-flex align-items-center justify-content-center ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner text-start">
                                <span>{{ $header->subtitle }}</span>
                                <h1 class="title">Hi, I’m <span>{{ $header->title }}</span></h1>
                                {{-- <h2>based in Bangladesh. XIKO</h2> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide  -->
            </div>
        </div>
        @endif
        <!-- End Slider Area  -->

<!-- Start Client Logo Area -->
@if($clients->count())
<div class="rn-client-area rn-section-gap bg_color--1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb--50">
                    <h2 class="title">Client Logo</h2>
                </div>
            </div>
        </div>

        <div class="client-slider">
            <div class="client-track">
                @foreach($clients as $client)
<div class="client-logo">
    <div class="logo-wrapper">
        <img src="{{ asset('storage/'.$client->logo) }}"
             alt="{{ $client->name }}">
    </div>
</div>
                @endforeach



            </div>
        </div>
    </div>
</div>
@endif
<!-- End Client Logo Area -->


<!-- Start Global Reach Map Area -->
<div class="rn-global-map-area rn-section-gap bg_color--1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb--40">
                    <h2 class="title">Presented Keynotes & Facilitated Training Globally</h2>
                    {{-- <p>Empowering leaders across <strong>13 countries</strong> in Asia, Europe, and North America</p> --}}
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div id="global-map-container" style="height: 500px; width: 100%; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 40px rgba(0,0,0,0.1); background: #e8e8e8;"></div>
            </div>
        </div>
        
        <!-- Country List -->
        <div class="country-list-section mt--50">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="country-grid-wrapper">
                        <div class="country-grid">
                            <!-- Row 1: 7 items -->
                            <div class="country-item" onclick="flyToCountry(0)" style="border-color: #1a1a1a;">
                                <img src="https://flagcdn.com/w80/af.png" alt="Afghanistan" class="flag-img">
                                <span class="name">Afghanistan</span>
                                <span class="check">✔</span>
                            </div>
                            <div class="country-item" onclick="flyToCountry(1)" style="border-color: #006a4e;">
                                <img src="https://flagcdn.com/w80/bd.png" alt="Bangladesh" class="flag-img">
                                <span class="name">Bangladesh</span>
                                <span class="check">✔</span>
                            </div>
                            <div class="country-item" onclick="flyToCountry(2)" style="border-color: #ff0000;">
                                <img src="https://flagcdn.com/w80/ca.png" alt="Canada" class="flag-img">
                                <span class="name">Canada</span>
                                <span class="check">✔</span>
                            </div>
                            <div class="country-item" onclick="flyToCountry(3)" style="border-color: #de2910;">
                                <img src="https://flagcdn.com/w80/cn.png" alt="China" class="flag-img">
                                <span class="name">China</span>
                                <span class="check">✔</span>
                            </div>
                            <div class="country-item" onclick="flyToCountry(4)" style="border-color: #c8102e;">
                                <img src="https://flagcdn.com/w80/dk.png" alt="Denmark" class="flag-img">
                                <span class="name">Denmark</span>
                                <span class="check">✔</span>
                            </div>
                            <div class="country-item" onclick="flyToCountry(5)" style="border-color: #ff9933;">
                                <img src="https://flagcdn.com/w80/in.png" alt="India" class="flag-img">
                                <span class="name">India</span>
                                <span class="check">✔</span>
                            </div>
                            <div class="country-item" onclick="flyToCountry(6)" style="border-color: #010066;">
                                <img src="https://flagcdn.com/w80/my.png" alt="Malaysia" class="flag-img">
                                <span class="name">Malaysia</span>
                                <span class="check">✔</span>
                            </div>
                            
                            <!-- Row 2: 6 items (centered) -->
                            <div class="country-item" onclick="flyToCountry(7)" style="border-color: #dc143c;">
                                <img src="https://flagcdn.com/w80/np.png" alt="Nepal" class="flag-img">
                                <span class="name">Nepal</span>
                                <span class="check">✔</span>
                            </div>
                            <div class="country-item" onclick="flyToCountry(8)" style="border-color: #ed2939;">
                                <img src="https://flagcdn.com/w80/sg.png" alt="Singapore" class="flag-img">
                                <span class="name">Singapore</span>
                                <span class="check">✔</span>
                            </div>
                            <div class="country-item" onclick="flyToCountry(9)" style="border-color: #ed1c24;">
                                <img src="https://flagcdn.com/w80/th.png" alt="Thailand" class="flag-img">
                                <span class="name">Thailand</span>
                                <span class="check">✔</span>
                            </div>
                            <div class="country-item" onclick="flyToCountry(10)" style="border-color: #012169;">
                                <img src="https://flagcdn.com/w80/gb.png" alt="UK" class="flag-img">
                                <span class="name">UK</span>
                                <span class="check">✔</span>
                            </div>
                            <div class="country-item" onclick="flyToCountry(11)" style="border-color: #3c3b6e;">
                                <img src="https://flagcdn.com/w80/us.png" alt="USA" class="flag-img">
                                <span class="name">USA</span>
                                <span class="check">✔</span>
                            </div>
                            <div class="country-item" onclick="flyToCountry(12)" style="border-color: #da251d;">
                                <img src="https://flagcdn.com/w80/vn.png" alt="Vietnam" class="flag-img">
                                <span class="name">Vietnam</span>
                                <span class="check">✔</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Global Reach Map Area -->


        <!-- Start Portfolio Area  -->
      <div class="rn-portfolio-area rn-section-gap bg_color--1" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title section-title--3 text-center mb--30">
                            <h2 class="title">My Latest Project</h2>
                            <p>Empowering leaders and organizations globally through 27+ years of expertise in leadership development, executive coaching, and high-impact training.</p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- Start Single Portfolio  -->
                    @foreach($portfolioProjects->take(6) as $project)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="portfolio text-center">
                            <div class="thumbnail-inner">
                                <div class="thumbnail"><img src="{{ asset('storage/'.$project->featured_image) }}" class="w-100"></div>
                                <div class="bg-blr-image "></div>
                            </div>
                            <div class="content">
                                <div class="inner">
                                    <p>{{ $project->category }}</p>
                                    <h4><a href="{{ route('project.show', $project->slug) }}">{{ $project->title }}</a>
                                    </h4>
                                    <div class="portfolio-button">
                                        <a class="rn-btn" href="{{ route('project.show', $project->slug) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single Portfolio  -->




                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="view-more-btn mt--60 mt_sm--30 text-center">
                            <a class="rn-button-style--2 btn_solid" href="{{ route('projects') }}">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Portfolio Area  -->


        
        <!-- Start About Area  -->
        <div class="about-area rn-section-gap bg_color--1" id="about">
            <div class="about-wrapper">
                <div class="container">
                    <div class="row row--35 align-items-center">
                        <div class="col-lg-5">
                            <div class="thumbnail">
                                <img class="w-100" src="{{ asset('assets/images/about/about-8.jpg') }}" alt="About Images" />
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="about-inner inner pt--100 pt_sm--40 pt_md--40">
                                <div class="section-title">
                                    <h2 class="title">About Me</h2>
                                    <p class="description"style="text-align: justify;"><i>Global Leadership Trainer & Coach</i><br>
Founder & CEO, Global Center of Excellence, LLC, USA<br>
Founder & Managing Partner, Quazi Consultants, Bangladesh <br>Over the past 27 years, Quazi M. Ahmed has built a strong international reputation as a master trainer, engaging keynote speaker, 
executive coach, and management consultant, working with diverse organizations and leaders across 13 countries in Asia, Europe, and North America, positively impacting the lives of more than 100,000 professionals and entrepreneurs.

                                    </p>
                                </div>
                                <div class="tab-wrapper mt--30">
                                    <ul class="nav nav-tabs tab-style--1" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="mainskill" data-bs-toggle="tab"
                                                data-bs-target="#rn-mainskill" role="tab" aria-controls="mainskill"
                                                aria-selected="true">Skills & Expertise</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="awards" data-bs-toggle="tab"
                                                data-bs-target="#rn-awards" role="tab" aria-controls="awards"
                                                aria-selected="false">Awards</a>
                                        </li>
                                        {{-- <li class="nav-item">
                                            <a class="nav-link" id="experience" data-bs-toggle="tab"
                                                data-bs-target="#rn-experience" role="tab"
                                                aria-controls="experience" aria-selected="false">Experience</a>
                                        </li> --}}
                                        <li class="nav-item">
                                            <a class="nav-link" id="education" data-bs-toggle="tab"
                                                data-bs-target="#rn-education" role="tab" aria-controls="education"
                                                aria-selected="false">Advanced Academic Background</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="rn-mainskill" role="tabpanel"
                                            aria-labelledby="mainskill">
                                            <div class="single-tab-content">
                                                <ul>
                                                    <li><a href="#">Leadership Development: </a>Expert in designing and facilitating international leadership programs, including the Puma Leadership Expedition (PLE) in the Asia Pacific region.</li>
                                                    <li><a href="#">Professional Coaching: </a> Certified Facilitator for Inside Out Coaching (USA) and a dedicated leadership coach.</li>
                                                    <li><a href="#">International Training: </a>Extensive experience conducting workshops in diverse countries such as the UK, USA, Canada, Denmark, Thailand, Vietnam, and Afghanistan.</li>
                                                    <li><a href="#">Public Speaking: </a>Accomplished TEDx Speaker and Keynote Presenter for major corporate and public events.</li>
                                                     <li><a href="#">Soft Skills Development:  </a>Specialist in soft skills training for corporate, social/NGO, and government sectors.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="rn-awards" role="tabpanel"
                                            aria-labelledby="Awards & Certifications">
                                            <div class="single-tab-content">
                                                <ul>
                                                    <li><a href="#">IFC-Certified Master Trainer: </a> Holds the prestigious Master Trainer certification from the International Finance Corporation (World Bank Group).
                                                    </li>
                                                    <li><a href="#">IFC Certified Assessor: </a>Recognized as a certified assessor (2021) and certified face-to-face trainer.
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="rn-experience" role="tabpanel"
                                            aria-labelledby="experience">
                                            <div class="single-tab-content">
                                                <ul>
                                                    <li><a href="/service">Sr. Front-end Engineer<span> -
                                                                Google</span></a> 2018
                                                        - Current</li>
                                                    <li><a href="/service">Front-end Engineer<span> -
                                                                Microsoft</span></a> 2017
                                                        - 2018</li>
                                                    <li><a href="/service">Software Engineer<span> - Alibaba
                                                            </span></a> 2013-
                                                        2014</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="rn-education" role="tabpanel"
                                            aria-labelledby="education">
                                            <div class="single-tab-content">
                                                <ul>
                                                    
                                                    <li><a href="/service">MP <span>- New York University (NYU), USA. </a></li>
                                                    <li><a href="/service">MA <span> - Japan.</span></a></li>
                                                    <li><a href="/service">MBA <span> - IBA, Bangladesh.</span></a></li>
                                                    <li><a href="/service">LLB <span> - Bangladesh.</span></a></li>
                                                    <li><a href="/service">CISS <span> - Norway.</span></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area  -->

        <!-- Start Service Area  -->
        <div class="rn-service-area rn-section-gap bg_color--5" id="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title service-style--3 text-center mb--20 mb_sm--0 md_md--0">
                            <h2 class="title">Professional Services</h2>
                            {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- Start Single Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--40">
                        <div class="single-service service__style--2 bg-color-gray">
                            <a href="#">
                                <div class="service">
                                    <div class="icon">
                                        <i data-feather="cast"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Leadership Development & Training</h3>
                                        <p>Customized programs designed for the corporate, social/NGO, and government sectors. This includes the facilitation of International Leadership Programs (ILP) and specialized Leadership Expeditions for global teams.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--40">
                        <div class="single-service service__style--2 bg-color-gray">
                            <a href="#">
                                <div class="service">
                                    <div class="icon">
                                        <i data-feather="layers"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Executive Coaching</h3>
                                        <p>High-impact leadership coaching and facilitation for senior management. Utilizing globally recognized methodologies, such as Inside Out Coaching (USA), to unlock individual and organizational potential.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--40">
                        <div class="single-service service__style--2 bg-color-gray">
                            <a href="#">
                                <div class="service">
                                    <div class="icon">
                                        <i data-feather="users"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Soft Skills Mastery</h3>
                                        <p>Comprehensive workshops focused on essential interpersonal skills, including emotional intelligence, communication, and team synergy, tailored to enhance organizational culture.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--40">
                        <div class="single-service service__style--2 bg-color-gray">
                            <a href="#">
                                <div class="service">
                                    <div class="icon">
                                        <i data-feather="monitor"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Keynote Speaking</h3>
                                        <p>Engaging presentations for corporate events and international conferences. As a TEDx speaker, Quazi M. Ahmed delivers insights on leadership and personal growth that resonate with global audiences.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--40">
                        <div class="single-service service__style--2 bg-color-gray">
                            <a href="#">
                                <div class="service">
                                    <div class="icon">
                                        <i data-feather="camera"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Global Facilitation & Consulting</h3>
                                        <p>Expert facilitation for multinational organizations, drawing on over 27 years of experience across the USA, UK, Asia, and Europe to address complex organizational challenges.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--40">
                        <div class="single-service service__style--2 bg-color-gray">
                            <a href="#">
                                <div class="service">
                                    <div class="icon">
                                        <i data-feather="activity"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="title">Certified Assessments</h3>
                                        <p>Professional training assessments and delivery that adhere to the rigorous international standards of the IFC (World Bank Group), ensuring measurable impact and quality.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Service  -->
                </div>
            </div>
        </div>
        <!-- Start Service Area  -->

<!-- Start Founder Area -->
<div class="rn-founder-area rn-section-gap bg_color--1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb--40">
                    <h2 class="title">I am the Founder of</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Single Logo -->
            <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb--30">
                <div class="founder-logo text-center">
                    <a href="https://quaziconsultants.com" target="_blank">
                        <span class="hover-overlay"></span>
                        <img src="{{ asset('assets/images/founder/logo-1.png') }}" alt="QUAZI Consultants">
                    </a>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb--30">
                <div class="founder-logo text-center">
                    <a href="https://globalcenterofexcellence.com/" target="_blank">
                    <span class="hover-overlay"></span>
                        <img src="{{ asset('assets/images/founder/logo-2.png') }}" alt="Global Center of Excellence, LLC">
                    </a>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb--30">
                <div class="founder-logo text-center">
                    <a href="https://bondbd.net/" target="_blank">
                        <span class="hover-overlay"></span>
                        <img src="{{ asset('assets/images/founder/logo-3.png') }}" alt="Company Name">
                    </a>
                </div>
            </div>



            <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb--30">
                <div class="founder-logo text-center">
                    <a href="https://boldbd.org/" target="_blank">
                        <span class="hover-overlay"></span>
                        <img src="{{ asset('assets/images/founder/logo-5.png') }}" alt="Company Name">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Founder Area -->



        <!-- Start Blog Area  -->
        <div class="rn-blog-area rn-section-gap bg_color--5" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title section-title--3 text-center mb--30">
                            <h2 class="title">Upcoming Project</h2>
                            <p>There are several upcoming initiatives and developments currently in progress. Stay tuned for updates as we work on delivering impactful projects and new opportunities.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Blog Area  -->
                    @foreach($upcomingProjects as $project)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="blog blog-style--1">
                            <div class="thumbnail">
                                <a href="#">
                                    <img class="w-100" src="{{ asset('storage/'.$project->featured_image) }}" alt="Blog Images" />
                                </a>
                            </div>
                            <div class="content">
                                <p class="blogtype">{{ $project->category }}</p>
                                <h4 class="title"><a href="{{ route('project.show', $project->slug) }}">{{ $project->title }}</a>
                                </h4>
                                <div class="blog-btn">
                                    <a class="rn-btn text-white" href="{{ route('project.show', $project->slug) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Blog Area  -->





        <!-- Start Contact Area  -->
        <div class="rn-contact-area rn-section-gap bg_color--1" id="contact">
            <div class="contact-form--1">
                <div class="container">
                    <div class="row row--35 align-items-start">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="section-title text-start mb--50 mb_sm--30 mb_md--30">
                                <h2 class="title">Reach Out to Me.</h2>
                                <p class="description">I am available for freelance work. Connect with me via
                                    phone:
                                    <a href="https://wa.me:+880 1711-561861">+880 1711-561861</a> or email:
                                    <a href="mailto:quazi@quazi.global"> quazi@quazi.global</a>
                                </p>
                            </div>
                            <div class="form-wrapper">
                                <form>
                                    <label htmlFor="item01">
                                        <input type="text" name="name" id="item01" placeholder="Your Full Name *" />
                                    </label>

                                    <label htmlFor="item02">
                                        <input type="text" name="email" id="item02" placeholder="Your email *">
                                    </label>

                                    <label htmlFor="item03">
                                        <input type="text" name="subject" id="item03" placeholder="Write a Subject">
                                    </label>
                                    <label htmlFor="item04">
                                        <textarea type="text" id="item04" name="message"
                                            placeholder="Your Message"></textarea>
                                    </label>
                                    <button class="rn-button-style--2 btn_solid" type="submit" value="submit"
                                        name="submit" id="mc-embedded-subscribe">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="thumbnail mb_md--30 mb_sm--30">
                                <img src="{{ asset('assets/images/about/about-9.jpg') }}" alt="trydo" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Area  -->


@endsection