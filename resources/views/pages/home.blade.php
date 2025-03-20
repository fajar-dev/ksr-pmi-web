@extends('layouts.app')

@section('seo')
@endsection

@section('content')
 <!-- ========== Slider Area Starts ===========-->
  <div class="slider-area">
    <div class="slider-social pl-80">
      <div class="slider-soial-icons slider-social-animated">
        <ul>
          <li><a href="https://www.facebook.com/wpsmasher/"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="https://twitter.com/mowlasystems"><i class="fab fa-instagram"></i></a></li>
          <li><a href="https://behance.net/arafatjamil01"><i class="fab fa-linkedin-in"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCAUpI4mQGz8alkVTAAHTv2A"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="hero-slider slider-arrow slider-arrow-01">
      <div class="single-slider slider-height slider-circle" style="background: url('{{ asset('assets/img/slider/red-slider-bg.jpg') }}');">
        <div class="container">
          <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-9 pr-0">
              <div class="slider-description pt-185 pb-190">

                <div class="slider-text">
                  <div class="line ml-10 bg-dark"></div>
                  <span data-animation="fadeInLeft" data-delay=".5s">Business Goals Need Attention</span>
                  <h1 class="mt-15 " data-animation="fadeInLeft" data-delay="1s">
                    Business Ideas <br>
                    And The Passionate <br>
                    People Behind.
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="single-slider slider-height slider-circle" style="background: url('{{ asset('assets/img/slider/red-slider-bg-2.jpg') }}');">
        <div class="container">
          <div class="row">
            <div class="col-xl-8  col-lg-8 col-md-8 pr-0">
              <div class="slider-description pt-185 pb-190">

                <div class="slider-text">
                  <div class="line ml-10"></div>
                  <span data-animation="fadeInLeft" data-delay=".5s">Business Goals Need Attention</span>
                  <h1 class="mt-15 " data-animation="fadeInLeft" data-delay="1s">
                    Business Ideas <br>
                    And The Passionate <br>
                    People Behind.
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ========== Slider Area Starts ===========-->

  <!-- ========== Services Area Starts ========= -->
  <div class="services-area">
    <div class="row no-gutters align-items-stretch">
      
      <!-- Card pertama -->
      <div class="col-xl-4 col-lg-4 col-md-4 d-flex align-items-stretch">
        <div class="single-service w-100 pt-100 pl-100 pb-80 pr-120" 
             style="background-image: url({{ asset('assets/img/bg/01.png') }});">
          <div class="service-title d-flex mb-35">
            <div class="service-icon">
              <img src="{{ asset('assets/img/icons/icon-marketing.png') }}" alt="marketing">
            </div>
            <h2 class="ml-40 mt-10">Pendidikan & Pelatihan Dasar</h2>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
            tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          </p>
        </div>
      </div>
  
      <!-- Card kedua -->
      <div class="col-xl-4 col-lg-4 col-md-4 d-flex align-items-stretch">
        <div class="single-service w-100 pt-100 pl-100 pb-80 pr-120"
             style="background-image: url({{ asset('assets/img/bg/02.png') }});">
          <div class="service-title d-flex mb-35">
            <div class="service-icon">
              <img src="{{ asset('assets/img/icons/icon-strategic-planning.png') }}" alt="planning">
            </div>
            <h2 class="ml-40 mt-10">Disiplin Ilmu & Pengabdian</h2>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
            tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          </p>
        </div>
      </div>
  
      <!-- Card ketiga -->
      <div class="col-xl-4 col-lg-4 col-md-4 d-flex align-items-stretch">
        <div class="single-service w-100 pt-100 pl-100 pb-80 pr-120"
             style="background-image: url({{ asset('assets/img/bg/03.png') }});">
          <div class="service-title d-flex mb-40">
            <div class="service-icon">
              <img src="{{ asset('assets/img/icons/icons-business.png') }}" alt="planning">
            </div>
            <h2 class="ml-40 mt-10">Spesialisasi & Sertifikasi</h2>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
            tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          </p>
        </div>
      </div>
      
    </div>
  </div>
  
  <!-- ========== Services Area Ends ========= -->

  <!-- ============ About Area Starts=========== -->
  <div class="about-area pb-0 pt-120">
    <div class="about-information">
      <div class="container">
        <div class="row ">
            <div class="col-xl-6 col-lg-6">
            <div class="about-2-images">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="about-2-img mb-30">
                    <img class="img-fluid" src="{{ asset('assets/img/team/about-2-1.jpg') }}" alt="about person">
                  </div>
                  <div class="about-2-img">
                    <img class="img-fluid" src="{{ asset('assets/img/team/about-2-3.jpg') }}" alt="about person">
                  </div>
                </div>
  
                <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="about-2-img mb-30 mt-30">
                    <img class="img-fluid" src="{{ asset('assets/img/team/about-2-2.jpg') }}" alt="about person">
                  </div>
                  <div class="about-2-img">
                    <img class="img-fluid" src="{{ asset('assets/img/team/about-2-4.jpg') }}" alt="about person">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="about-details pb-30 pt-70">
              <div class="section-title text-center">
                <div class="line ml-10"></div>
                <h3>About Us</h3>
                <div class="line line-mirror ml-20"></div>
                <h2 class="mt-15 mb-35">
                  Advancing Regime’s
                  Domestic and Foreign
                </h2>
              </div>
              <div class="approach-pills mt-35">
                <nav>
                  <div class="nav nav-tabs justify-content-center" id="approach-tab" role="tablist">
                    <a class="nav-item nav-link" id="nav-mission-tab" data-toggle="tab" href="#nav-mission" role="tab"
                      aria-controls="nav-mission" aria-selected="false">Our Mission</a>
                    <a class="nav-item nav-link active" id="nav-vision-tab" data-toggle="tab" href="#nav-vision"
                      role="tab" aria-controls="nav-vision" aria-selected="true">Our Vision</a>
                    <a class="nav-item nav-link" id="nav-value-tab" data-toggle="tab" href="#nav-value" role="tab"
                      aria-controls="nav-value" aria-selected="false">Our Value</a>
                  </div>
                </nav>
                <div class="tab-content text-center" id="nav-tabContent">
                  <div class="tab-pane fade" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                    <p class="mt-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                  <div class="tab-pane fade  show active" id="nav-vision" role="tabpanel"
                    aria-labelledby="nav-vision-tab">
                    <p class="mt-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                  <div class="tab-pane fade" id="nav-value" role="tabpanel" aria-labelledby="nav-value-tab">
                    <p class="mt-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="about-hovers hover-height mt-180" style="background: url({{ asset('assets/img/bg/about-tab.jpg') }});">
      <div class="hover-items hover-size float-right">
        <div class="single-hover active bg-white d-flex">
          <div class="hover-icon">
            <img src="img/icons/banking.png" alt="banking">
            <img src="img/icons/banking-white.png" alt="banking">
          </div>
          <div class="hover-text">
            <h3>Private Banking</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
          </div>
        </div>
        <div class="single-hover bg-white d-flex">
          <div class="hover-icon">
            <img src="img/icons/target-red.png" alt="target">
            <img src="img/icons/target-white.png" alt="target">
          </div>
          <div class="hover-text">
            <h3>Reduce Tax Service</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
          </div>
        </div>
        <div class="single-hover bg-white d-flex">
          <div class="hover-icon">
            <img src="img/icons/business-management.png" alt="banking">
            <img src="img/icons/business-management-white.png" alt="banking">
          </div>
          <div class="hover-text">
            <h3>Business Management</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
          </div>
        </div>
        <div class="single-hover bg-white d-flex">
          <div class="hover-icon">
            <img src="img/icons/finance.png" alt="banking">
            <img src="img/icons/finance-white.png" alt="banking">
          </div>
          <div class="hover-text">
            <h3>Finance Advice</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ============ About area Ends=========== -->

    <!-- ================= Team Area Starts ================ -->
    <div class="team-slider-area pt-115 pb-180  grey-bg">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="section-title text-center">
              <div class="line ml-10"></div>
              <h3>Team</h3>
              <div class="line line-mirror ml-20"></div>
              <h2 class="mt-15 mb-35">
                Our Team
              </h2>
            </div>
          </div>
        </div>
  
        <div class="team-slider-items mt-30 pb-30">
          <div class="row">
            <div class="col-xl-4 col-lg-4">
              <div class="single-team-slide text-center">
                <div class="team-slide-img">
                  <img class="img-fluid" src="{{ asset('assets/img/team/team-page-person-1.jpg') }}" alt="first man">
                </div>
                <div class="team-slide-texts white-bg">
                  <h4>Founder</h4>
                  <h3>Rosalina D. William</h3>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="single-team-slide text-center">
                <div class="team-slide-img">
                  <img class="img-fluid" src="{{ asset('assets/img/team/team-page-person-2.jpg') }}" alt="first man">
                </div>
                <div class="team-slide-texts white-bg">
                  <h4>CEO</h4>
                  <h3>Kelian M. Babbe</h3>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="single-team-slide text-center">
                <div class="team-slide-img">
                  <img class="img-fluid" src="{{ asset('assets/img/team/team-page-person-3.jpg') }}" alt="first man">
                </div>
                <div class="team-slide-texts white-bg">
                  <h4>Devoloper</h4>
                  <h3>Leonel V. Vilkiski</h3>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="single-team-slide text-center">
                <div class="team-slide-img">
                  <img class="img-fluid" src="{{ asset('assets/img/team/team-page-person-1.jpg') }}" alt="first man">
                </div>
                <div class="team-slide-texts white-bg">
                  <h4>Founder</h4>
                  <h3>Rosalina D. William</h3>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="single-team-slide text-center">
                <div class="team-slide-img">
                  <img class="img-fluid" src="{{ asset('assets/img/team/team-page-person-2.jpg') }}" alt="first man">
                </div>
                <div class="team-slide-texts white-bg">
                  <h4>CEO</h4>
                  <h3>Kelian M. Babbe</h3>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="single-team-slide text-center">
                <div class="team-slide-img">
                  <img class="img-fluid" src="{{ asset('assets/img/team/team-page-person-3.jpg') }}" alt="first man">
                </div>
                <div class="team-slide-texts white-bg">
                  <h4>Devoloper</h4>
                  <h3>Leonel V. Vilkiski</h3>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="single-team-slide text-center">
                <div class="team-slide-img">
                  <img class="img-fluid" src="{{ asset('assets/img/team/team-page-person-1.jpg') }}" alt="first man">
                </div>
                <div class="team-slide-texts white-bg">
                  <h4>CEO</h4>
                  <h3>Kelian M. Babbe</h3>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="single-team-slide text-center">
                <div class="team-slide-img">
                  <img class="img-fluid" src="{{ asset('assets/img/team/team-page-person-2.jpg') }}" alt="first man">
                </div>
                <div class="team-slide-texts white-bg">
                  <h4>Devoloper</h4>
                  <h3>Leonel V. Vilkiski</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ================= Team Area Ends ================ -->

  <!-- ============= Call To Action Area Starts ======== -->
  <div class="cta-area">
    <div class="row no-gutters">
      <div class="col-12">
        <div class="cta-section pt-80 pb-80 pl-140 pr-140 color-white">
          <div class="row">
            <div class="col-md-8 section-title">
              <div class="line bg-dark text-dark ml-10"></div>
              <h3>Ayo bergabung Bersama Kami</h3>
              <h2 class="mt-15 mb-15">
                Menjadi Bagian dari <br> KSR-PMI Unit 04 Unimal
              </h2>
            </div>
            <div class="col-md-4">
              <div class="join-button float-lg-right mt-100 mr-100 text-dark">
                <a href="contact.html" class="text-dark">Apply Today</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ============= Call To Action Area Ends ======== -->

  <!-- ============= Blog Area Starts ======== -->
  <div class="blog-area pt-120 blog-bg pb-120">
    <div class="container">
      <div class="section-title text-center">
        <div class="line ml-10"></div>
        <h3>News</h3>
        <div class="line line-mirror ml-20"></div>
        <h2 class="mt-15 mb-35">
          News Feeds
        </h2>
      </div>
      <div class="row pt-30">
        <div class="col-xl-4 col-lg-4 col-md-12">
          <div class="blog-section-bg">
            <div class="blog-bg-thumb" style="background-image: url('{{ asset('assets/img/blog/overlay.jpg') }}')"></div>
            <div class="b-blog-detalis">
              <div class="blog-info mr-30 ml-50">
                <div class="blog-meta mb-20">
                  <span class="author mr-15">
                    Rosalina D.
                  </span>
                  <span class="date"><i class="far fa-calendar-alt"></i>
                    24th May 2020
                  </span>
                </div>
                <div class="blog-text pt-20">
                  <a href="news-detalis.html">
                    <h3>Designated today, was
                      appointed by malang
                      for outing with UX.</h3>
                  </a>
                  <p class="pr-15">Lorem ipsum dolor sit amet, consect et ur adipisi elit, sed do eiu smodte
                  </p>
                  <a href="news-detalis.html">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12">
          <div class="blog-section-bg">
            <div class="blog-bg-thumb" style="background-image: url('img/blog/overlay.jpg')"></div>
            <div class="b-blog-detalis">
              <div class="blog-info mr-30 ml-50">
                <div class="blog-meta mb-20">
                  <span class="author mr-15">
                    Rosalina D.
                  </span>
                  <span class="date"><i class="far fa-calendar-alt"></i>
                    24th May 2020
                  </span>
                </div>
                <div class="blog-text pt-20">
                  <a href="news-detalis.html">
                    <h3>Designated today, was
                      appointed by malang
                      for outing with UX.</h3>
                  </a>
                  <p class="pr-15">Lorem ipsum dolor sit amet, consect et ur adipisi elit, sed do eiu smodte
                  </p>
                  <a href="news-detalis.html">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12">
          <div class="blog-section-bg">
            <div class="blog-bg-thumb" style="background-image: url('img/blog/overlay.jpg')"></div>
            <div class="b-blog-detalis">
              <div class="blog-info mr-30 ml-50">
                <div class="blog-meta mb-20">
                  <span class="author mr-15">
                    Rosalina D.
                  </span>
                  <span class="date"><i class="far fa-calendar-alt"></i>
                    24th May 2020
                  </span>
                </div>
                <div class="blog-text pt-20">
                  <a href="news-detalis.html">
                    <h3>Designated today, was
                      appointed by malang
                      for outing with UX.</h3>
                  </a>
                  <p class="pr-15">Lorem ipsum dolor sit amet, consect et ur adipisi elit, sed do eiu smodte
                  </p>
                  <a href="news-detalis.html">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- =================== Blog Area Ends ============== -->
@endsection