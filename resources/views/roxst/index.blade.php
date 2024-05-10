<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Roxst.id</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('foto')."/".get_meta_value('_foto')}}" rel="icon">
  <link href="{{asset('day')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('day')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('day')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('day')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('day')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{asset('day')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('day')}}/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Updated: May 04 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:{{get_meta_value('_email')}}">{{get_meta_value('_email')}}</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{get_meta_value('_nohp')}}</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          @if (get_meta_value('_linkedin') != null)
              <a href="https://www.linkedin.com/in/{{ get_meta_value('_linkedin') }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
          @endif
          @if (get_meta_value('_twitter') != null)
              <a href="https://www.twitter.com/{{ get_meta_value('_twitter') }}" class="twitter"><i class="bi bi-twitter"></i></a>
          @endif
          @if (get_meta_value('_facebook') != null)
              <a href="https://www.facebook.com/{{ get_meta_value('_facebook') }}" class="facebook"><i class="bi bi-facebook"></i></a>
          @endif
          @if (get_meta_value('_instagram') != null)
              <a href="https://www.instagram.com/{{ get_meta_value('_instagram') }}" class="instagram"><i class="bi bi-instagram"></i></a>
          @endif
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="https://lynk.id/{{get_meta_value('_github')}}" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{asset('foto')."/".get_meta_value('_foto')}}">
          <h1 class="sitename">{{get_meta_value('_github')}}</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="">Home</a></li>
            <li><a href="#about">About</a></li>
            <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#services">Services</a></li>
                <li><a href="#cards">How to Order?</a></li>
                <li><a href="#call-to-action">Call to Action</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                
                <li class="dropdown"><a href="#contact"><span>Contact</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#footer">More Information</a></li>
                  </ul>
                </li>

                <li><a href="{{url('/auth')}}">Login as Admin</a></li>
              </ul>
            </li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="{{asset('day')}}/assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-start">
          <div class="col-lg-8">
            <h2 class="">Welcome to {{get_meta_value('_github')}}</h2>
            <p>{{get_meta_value('_deskripsi')}}</p>
            <a href="#about" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="">About Us<br></span>
        <h2 class="">About Us<br></h2>
        <p>This page contains more information about us.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset('day')}}/assets/img/about.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>{!!$about->judul!!}</h3>
            {!!set_list($about->isi)!!}
            <!--
            <p class="fst-italic">
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
            </ul>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          -->
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="">Services</span>
        <h2>Services</h2>
        <p>This page provides information on some of the services we provide.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>{!!$service_1->judul!!}</h3>
              </a>
              <p>{!!$service_1->isi!!}</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-columns"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>{!!$service_2->judul!!}</h3>
              </a>
              <p>{!!$service_2->isi!!}</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-camera"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>{!!$service_3->judul!!}</h3>
              </a>
              <p>{!!$service_3->isi!!}</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->
        </div>

      </div>

    </section><!-- /Services Section -->

    

    <!-- Cards Section -->
    <section id="cards" class="cards section">


      <div class="container section-title" data-aos="fade-up">
        <span class="">How to Order?<br></span>
        <h2 class="">How to Order?<br></h2>
        <p>This page provides information on how to order our services.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="100">
            <span>01</span>
            <h4>{!!$step_1->judul!!}</h4>
            <p>{!!$step_1->isi!!}</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="200">
            <span>02</span>
            <h4>{!!$step_2->judul!!}</h4>
            <p>{!!$step_2->isi!!}</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="300">
            <span>03</span>
            <h4>{!!$step_3->judul!!}</h4>
            <p>{!!$step_3->isi!!}</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="400">
            <span>04</span>
            <h4>{!!$step_4->judul!!}</h4>
            <p>{!!$step_4->isi!!}</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="400">
            <span>05</span>
            <h4>{!!$step_5->judul!!}</h4>
            <p>{!!$step_5->isi!!}</p>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6 card" data-aos="fade-up" data-aos-delay="600">
            <span>06</span>
            <h4>{!!$step_6->judul!!}</h4>
            <p>{!!$step_6->isi!!}</p>
          </div><!-- End Card Item -->

        </div>

      </div>

    </section><!-- /Cards Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

      <img src="{{asset('day')}}/assets/img/cta-bg.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Call To Action</h3>
              <p>If you are interested in our services, you can click the button below to contact us directly.</p>
              <a class="cta-btn" href="#contact">Call To Action</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="">Portfolio</span>
        <h2>Portfolio</h2>
        <p>Here are some portfolios of services that we have been working on for some time.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <!--
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Card</li>
            <li data-filter=".filter-branding">Web</li>
          </ul>
          -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($experience as $item)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="{{asset('day')}}/assets/img/masonry-portfolio/{{$item->judul}}.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$item->info1}}</h4>
                {!!$item->info2!!}
                <a href="{{asset('day')}}/assets/img/masonry-portfolio/{{$item->judul}}.jpg" title="{{$item->info1}}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
              </div>
            </div><!-- End Portfolio Item -->
            @endforeach
            
            

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="">Team</span>
        <h2>Team</h2>
        <p>Here are the members of our team.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">
          @foreach ($education as $item)
          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{asset('day')}}/assets/img/team/{{$item->judul}}.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>{{$item->info1}}</h4>
                <span>{{$item->info2}}</span>
                <p>
                  {{$item->info3}}
                </p>
              </div>
            </div>
          </div><!-- End Team Member -->
          @endforeach

          

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="">Contact</span>
        <h2 class="">Contact</h2>
        <p>Here's our contact information.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>{{get_meta_value('_kota')}}, {{get_meta_value('_provinsi')}}</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>{{get_meta_value('_nohp')}}</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>{{get_meta_value('_email')}}</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://maps.google.com/maps?q=Malang&t=&z=12&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
          <div class="php-email-form" data-aos="fade-up" data-aos-delay="400">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" id="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" id="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" id="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" id="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit" onclick="kirim()">Send Message</button>
                  
                </div>


              </div>
            </form>
            <script>
              function kirim() {
                  var name = document.getElementById('name').value;
                  var emailAddress= document.getElementById('email').value;
                  var subject = document.getElementById('subject').value;
                  var message = document.getElementById('message').value;
                  window.location.href = "mailto:{{get_meta_value('_email')}}" + "?cc=" + emailAddress + "&subject=" + subject + "&body=Hello my name is " + name + ",%0D%0Amy message is " + message;
              }
              </script>
          </div><!-- End Contact Form -->
      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6">
          <div class="footer-about">
            <a href="index.html" class="logo sitename">{{get_meta_value('_github')}}</a>
            <div class="footer-contact pt-3">
              <p>{{get_meta_value('_kota')}},</p>
              <p>{{get_meta_value('_provinsi')}}</p>
              <p class="mt-3"><strong>Phone:</strong> <span>{{get_meta_value('_nohp')}}</span></p>
              <p><strong>Email:</strong> <span>{{get_meta_value('_email')}}</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              @if (get_meta_value('_linkedin') != null)
              <a href="https://www.linkedin.com/in/{{ get_meta_value('_linkedin') }}" class="linkedin"><i class="bi bi-linkedin"></i></a>
              @endif
              @if (get_meta_value('_twitter') != null)
                  <a href="https://www.twitter.com/{{ get_meta_value('_twitter') }}" class="twitter"><i class="bi bi-twitter"></i></a>
              @endif
              @if (get_meta_value('_facebook') != null)
                  <a href="https://www.facebook.com/{{ get_meta_value('_facebook') }}" class="facebook"><i class="bi bi-facebook"></i></a>
              @endif
              @if (get_meta_value('_instagram') != null)
                  <a href="https://www.instagram.com/{{ get_meta_value('_instagram') }}" class="instagram"><i class="bi bi-instagram"></i></a>
              @endif
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#services">Services</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#services">{!!$service_1->judul!!}</a></li>
            <li><a href="#services">{!!$service_2->judul!!}</a></li>
            <li><a href="#services">{!!$service_3->judul!!}</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Contact us at email contact</h4>
          <p>You can fill in and click the button below to contact us.</p>
          <div class="newsletter-form">
            <input type="email" id="emailInput" name="email" placeholder="Your Subject Here">
            <input type="submit" value="Send" onclick="subscribe()">
          </div>

          <script>
          function subscribe() {
              var emailAddress = document.getElementById('emailInput').value;
              window.location.href = "mailto:{{get_meta_value('_email')}}" + "?subject=" + emailAddress;
          }
          </script>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Oditya</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://www.instagram.com/oditya.rdh">Oditya</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('day')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('day')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('day')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('day')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('day')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('day')}}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{asset('day')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="{{asset('day')}}/assets/js/main.js"></script>
  

</body>

</html>