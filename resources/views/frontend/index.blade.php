@extends('frontend.main')
@section('herosection')
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up" style="color: #5d6349">Jokeen.id</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">
                    Memberikan pelayanan untuk pembuatan prototype sekaligus produk jadi.
                </h2>
                <div data-aos="fade-up" data-aos-delay="800">
                    <a href="#contact" class="btn-get-started scrollto">Bicarakan Kebutuhanmu!</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src="{{asset('frontend/assets/img/hero-2.png')}}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section>
@endsection
@section('content')
 <!-- ======= About Us Section ======= -->
 <section id="about" class="about">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>About Us</h2>
      </div>

      <div class="row content">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
          <p>
            Kami bekerja dalam bidang sebagai berikut :
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Program eksternal</li>
            <li><i class="ri-check-double-line"></i> 3D modeling</li>
            <li><i class="ri-check-double-line"></i> Simulasi Sistem</li>
            <li><i class="ri-check-double-line"></i> Pembuatan Prototype dan/atau barang jadi</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <p>
            Memberikan jembatan antara client yang ingin mewujudkan suatu produk yang belum memiliki resource dengan
            mahasiswa yang memiliki kreativitas tapi belum memiliki media untuk mengembangkannya.
          </p>
          <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2 d-flex flex-column justify-content-center" data-aos="fade-left" data-aos-delay="200">
          <h1 data-aos="fade-up">Ranah Jokeen.id</h1>
          <p data-aos="fade-up" class="mt-3">
            Bergerak pada ranah engineering dan interior dalam pembuatan prototype sekaligus produk jadi.
          </p>
        </div>

        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 hero-img"
          data-aos="fade-up">
          <img src="{{asset('frontend/assets/img/robot.png')}}" class="img-fluid" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{asset('frontend/assets/img/img2.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
          data-aos="fade-up">
          <h1 data-aos="fade-up">Program Jokeen.id</h1>
          <p data-aos="fade-up" class="mt-3">
            Jokeen.id memiliki prioritas pada program eksternal
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Counts Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Services</h2>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><a href="">Program eksternal</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bx bx-shape-polygon"></i></div>
            <h4 class="title"><a href="">3D modeling</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bx bx-vector"></i></div>
            <h4 class="title"><a href="">Simulasi Sistem</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bx bx-bong"></i></div>
            <h4 class="title"><a href="">Pembuatan Prototype dan/atau barang jadi</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-3dModel">3D Model</li>
            <li data-filter=".filter-protoype">Prototype</li>
            <li data-filter=".filter-3dPrint">3d Print</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

        <div class="col-lg-4 col-md-6 portfolio-item filter-3dModel">
          <div class="portfolio-wrap">
          <img src="{{asset('frontend/assets/img/portfolio/portofolio-1.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Tas</h4>
              <p>3D Model</p>
              <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/portofolio-1.png')}}" data-gall="portfolioGallery" class="venobox"
                  title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-protoype">
          <div class="portfolio-wrap">
          <img src="{{asset('frontend/assets/img/portfolio/portofolio-2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Neonbox</h4>
              <p>Prototype</p>
              <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/portofolio-2.jpg')}}" data-gall="portfolioGallery" class="venobox"
                  title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-3dPrint">
          <div class="portfolio-wrap">
          <img src="{{asset('frontend/assets/img/portfolio/portofolio-3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>3D Print</h4>
              <p>3D Print</p>
              <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/portofolio-3.jpg')}}" data-gall="portfolioGallery" class="venobox"
                  title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-3dModel">
          <div class="portfolio-wrap">
          <img src="{{asset('frontend/assets/img/portfolio/portofolio-4.png')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Keran</h4>
              <p>3D Model</p>
              <div class="portfolio-links">
              <a href="{{asset('frontend/assets/img/portfolio/portofolio-4.png')}}" data-gall="portfolioGallery" class="venobox"
                  title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>


      </div>

    </div>
  </section>
  <!-- End Portfolio Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Team</h2>
      </div>

      <div class="row justify-content-center">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
            <img src="{{asset('frontend/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Puguh Pambudi</h4>
              <span>Founder</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
            <img src="{{asset('frontend/assets/img/team/team-2.jpg')}}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>M. Husnir Rahman</h4>
              <span>Founder</span>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-about">
            <h3 style="color: #5d6349;">Jokeen.id</h3>
            <p>Memberikan pelayanan untuk pembuatan prototype sekaligus produk jadi. </p>

          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <div class="info">
            <div>
              <i class="ri-map-pin-line"></i>
              <p>Keputih, Surabaya</p>
            </div>

            <div>
              <i class="ri-mail-send-line"></i>
              <p>Jokeen.pro@gmail.com</p>
            </div>

            <div>
              <i class="ri-phone-line"></i>
              <p>+628705668818</p>
            </div>

            <div>
              <i class="bx bxl-instagram"></i>
              <p>jokeen.id</p>
            </div>

          </div>
        </div>

        <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
        <img src="{{asset('frontend/assets/img/contact.png')}}" class="img-fluid" alt="">
        </div>

      </div>

    </div>
  </section>
  <!-- End Contact Section -->

@endsection
