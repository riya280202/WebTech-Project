<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BULL HORN</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="index.css" />
    <script
      src="https://kit.fontawesome.com/712095325a.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  </head>
  <body>
    <script>
      AOS.init();
    </script>
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light p-md-2">
      <div class="container">
        <a class="navbar-brand text-dark" href="index.html">BULLHORN</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-dark" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#our_work">Our Work</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#about_mentor"
                >About Mentor</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#awards">Awards</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#webinars">Webinars</a>
            </li>
            <li class="nav-item">
              <button><a href="register.php"> Sign up</a></button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Banner Image  -->
    <div class="section" id="home" data-label="Home">
      <div
        class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
      >
        <div class="contentt">
          <div class="content-part" data-aos="fade-up" data-aos-duration="1000">
            DILIGENCE <br />
            EQUITY
          </div>
        </div>
      </div>
    </div>

    <div class="body">
      <!-- <div class="graph-1">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic soluta officiis excepturi expedita ut 
          </div> -->
      <div id="our_work">
        <div class="landing_heading" data-aos="zoom-in-up">What do we do?</div>
        <div class="container-fluid" data-aos="flip-up" data-aos-duration="700">
          <div class="row">
            <div class="col-md-4 center-card">
              <div class="card card-1">
                <img
                  src="images/ourwork_1.jpg"
                  class="card-img-top card-image"
                  alt="..."
                />
                <div class="card-content">
                  <h5 class="card-title" style="font-size: 1.3rem">
                    Advisory Service
                  </h5>
                </div>
                <div class="cardNumber">01</div>
              </div>
            </div>
            <div class="col-md-4 center-card" data-aos="flip-up">
              <div class="card card-2">
                <img
                  src="images/ourwork_2.webp"
                  class="card-img-top card-image"
                  alt="..."
                />
                <div class="card-content">
                  <h5 class="card-title" style="font-size: 1.3rem">
                    Actionable Effective Training
                  </h5>
                </div>
                <div class="cardNumber">02</div>
              </div>
            </div>
            <div class="col-md-4 center-card" data-aos="flip-up">
              <div class="card card-3">
                <img
                  src="images/ourwork_3.webp"
                  class="card-img-top card-image"
                  alt="..."
                />
                <div class="card-content">
                  <h5 class="card-title" style="font-size: 1.3rem">
                    Trading Mastery Mentorship Program
                  </h5>
                </div>
                <div class="cardNumber">03</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="about_mentor"></div>
      <div class="landing_heading" data-aos="zoom-in-up">About Mentor</div>
      <div class="flex" data-aos="zoom-in-up" data-aos-duration="700">
        <div class="flex1">
          <img src="images/mentor.jpg" alt="" class="img-fluid" />
        </div>
        <div class="flex2">
          Hello, My name is BullHorn <br />
          I am a trained Glider Pilot, also a Hang Glider Pilot, a trained Para
          Glider Pilot also a Trained Sky Diver, a trained Swimmer, a trained
          Water skier, a trained Sailor, a trained Horse rider, a trained Snow
          Skier and a trained Marksman <br><br>

          Everything has to be learnt… even a child has to learn to
          walk…everyone has to go to School, and a College to acquire a
          Professional Degree to become a Doctor, an Engineer or a Scientist. <br><br>
          “Nobody learns Trading and that is why they lose Trading has to be
          learnt too like any other Skill or be prepared to lose for sure”
        </div>
      </div>
    </div>

    <!-- awards section -->
    <div id="awards">
    <div id="testimonialsSection">
      <div class="landing_heading" data-aos="zoom-in-up"     data-aos-duration="1000"> Awards</div>
      <div class="t_cards">
      <div class="t_card t_card1" data-aos="flip-up" data-aos-duration="1000">
          <div class="t_image"> <img src="images/awards_1.jpg" alt="" class="img-fluid">
          <div class="project_overlay project_overlay--blur">
                      <p class="project_description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat dignissimos ratione illo fugit, ut error possimus, aliquam, laudantium numquam molestias ipsa molestiae at est nesciunt?
                      </p>
                  </div>
          </div>
          <div class="tcard_desc">LIZZY, Educator</div>
      </div>
      <div class="t_card t_card2" data-aos="flip-up" data-aos-duration="1000">
          <div class="t_image"> <img src="images/awards_2.jpg" alt="" class="img-fluid">
          <div class="project_overlay project_overlay--blur">
                      <p class="project_description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo aliquam non sapiente quas consequatur, dolorem rerum tempore dignissimos repudiandae amet quod accusantium harum fugiat cumque!
                      </p>
                  </div>
          </div>
          <div class="tcard_desc">tessa, model & yoga teacher</div>
      </div>
      <div class="t_card t_card3" data-aos="flip-up" data-aos-duration="1000">
          <div class="t_image"> <img src="images/awards_3.jpg" alt="" class="img-fluid">
          <div class="project_overlay project_overlay--blur">
                      <p class="project_description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. At rem ratione doloremque eos odit ea autem maiores vitae voluptatem quod alias itaque corporis, aperiam esse!
                      </p>
                  </div>
          </div>
          <div class="tcard_desc">annie, marketing expert</div>
      </div>
      </div>
    </div>
  </div>

    <!-- webinars -->
    <div id="webinars">
    <div class="landing_heading" data-aos="zoom-in-up" style="z-index: 1; background-color: #000;">Upcoming Webinars</div>
    <div class="timeline" id="timeline">
      
      <div class="container  containerC left" data-aos="fade-left"  data-aos-duration="500">
        <div class="content">
          <h2>24th April 2022, 04:00pm</h2>
          <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
        </div>
      </div>
      <div class="container containerC right" data-aos="fade-right" data-aos-duration="1000">
        <div class="content">
          <h2>26th April 2022, 06:00pm</h2>
          <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
        </div>
      </div>
      <div class="container containerC left" data-aos="fade-left" data-aos-duration="1000">
        <div class="content">
          <h2>26th April 2022, 07:00pm</h2>
          <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
        </div>
      </div>
      <div class="container containerC right" data-aos="fade-right" data-aos-duration="1000">
        <div class="content">
          <h2>29th April 2022, 01:00pm</h2>
          <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
        </div>
      </div>
      <div class="container containerC left" data-aos="fade-left" data-aos-duration="1000">
        <div class="content">
          <h2>29th April 2022, 07:00pm</h2>
          <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
        </div>
      </div>
      <div class="container containerC right" data-aos="fade-right" data-aos-duration="1000">
        <div class="content">
          <h2>30th April 2022, 05:00pm</h2>
          <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
        </div>
      </div>
    </div>
  </div>
        <!-- footer section -->
        <div class="section" id="footerSection">
          <div class="container-fluid" style="margin: 0; padding: 0;">
            <div class="row footerContent" style="margin: 0; padding: 0; height: 10rem; justify-content:space-around; font-size:0.85rem; align-items:center;">
              <div class="col-md-3" >
                Let’s connect: <br>
                <a href="" target="_blank">
                <i class="fa fa-instagram" style="color:#93845B; font-size:1.2rem;"></i>
                </a>
                <a href="">
                <i class="fa fa-envelope" style="color: #93845B; font-size:1.2rem; margin-left: 1.25rem;"></i>
              </a>
              </div>
              <div class="col-md-4" style="text-align:right;">
                © 2022 Bull Horn <br>
                All rights reserved <br>
                Terms & conditions | Our privacy policy
              </div>
              <!-- <a href="" style="bottom: 0; right: 0;">
              <i class="fa fa-arrow-up" style="color: #93845B; "></i>
              </a> -->
            </div>
          </div>
        </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
      var nav = document.querySelector("nav");

      window.addEventListener("scroll", function () {
        if (window.pageYOffset > 100) {
          nav.classList.add("navbar-solid");
        } else {
          nav.classList.remove("navbar-solid");
        }
      });
    </script>
  </body>
</html>
