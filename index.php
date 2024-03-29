<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Website Emet</title> 
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link
    rel="stylesheet"
    href="node_modules/@fortawesome/fontawesome-free/css/all.min.css"
  />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Home-start -->
    <section id="home">
      <header>
        <div class="container">
          <nav class="d-flex js-sb align-center">
            <h2 class="logo">E<span class="logo-art">me</span>t</h2>
            <div class="mb-icon">
              <div class="mobile-icon"></div>
            </div>
            <ul class="manue">
              <li> 
                <a href="#home" data-target="#home"><i class="fas fa-home"></i> home</a>
              </li>
              <li>
                <a href="#about" data-target="#about"><i class="far fa-user-circle"></i> about</a>
              </li>
              <li>
                <a href="#service" data-target="#service"><i class="fas fa-server"></i> service</a>
              </li>
              <li>
                <a href="#portfolio" data-target="#portfolio"
                  ><i class="far fa-file-powerpoint"></i> portfolio</a
                >
              </li>
                <a class="contact-btn"
                  ><i class="far fa-comment-alt"></i> contact</a
                >
            </ul>
          </nav>
        </div>
      </header>
      <div class="home-content container d-grid align-center">
          <img src="images/i-1.svg" alt="portfolio-img" class="hero-img" />
          <div class="home-content-box"> 
          <h3 class="subheading">Hello It's Emet Das</h3>
          <h2 class="heading-home">I'm a Developer</h2>
          <p class="paragraph my-2">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aperiam explicabo fugiat tempore reprehenderit error non illo, illum laudantium magni quidem itaque ab excepturi dolorem corporis animi ut incidunt in.
          </p>
          <div class="btn-container">
            <a class="btn-primary-hire cp">Hire Me Now</a>
            <a href="#!" class="btn-primary-hire">Portfolio</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Home-end -->
    <!-- About-start -->
    <section id="about" class="container">
      <div class="container text-center">
        <h2 class="heading">About</h2>
      </div>
      <div class="container d-grid about-container">
        <div class="about-info">
          <div class="personal-deatils">
            <h3 class="subheading">Personal Deatils:</h3>
            <p class="paragraph">
              My name is <strong>Emet Das</strong>. I am a web designer and
              developer. I have three years of experience.I have done 1k+ work
              on web design and development. Web design and web development is
              my passion.
            </p>
          </div>
          <div class="personal-info">
            <li><span>Name</span>: Emet Das</li>
            <li><span>BirthDay</span>: 5 March 2002</li>
            <li><span>Job</span>: Web Developer</li>
            <li><span>Email</span>: emet@b2bleadstaff.com</li>
            <li><span>Phone</span>: 01871096924</li>
            <li><span>Location</span>: Chittagong,Bangladesh</li>
          </div>
          <div class="social-media">
            <a
              href="https://www.linkedin.com/in/emet-das-b16485196/"
              title="linkedin"
              target="_developerEmetdas"
            >
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a
              href="https://www.facebook.com/emet.me/?view_public_for=100465838486186"
              title="facebook"
              target="_developerEmetdas"
            >
              <i class="fab fa-facebook-f"></i>
            </a>
            <a
              href="https://twitter.com/DasEmet"
              title="twitter"
              target="_developerEmetdas"
            >
              <i class="fab fa-twitter"></i>
            </a>
            <a
              href="https://www.instagram.com/emetdas24/"
              title="instagram"
              target="_developerEmetdas"
            >
              <i class="fab fa-instagram"></i>
            </a>
            <a
              href="https://github.com/emetdas"
              title="github"
              target="_developerEmetdas"
            >
              <i class="fab fa-github"></i>
            </a>
            <a
              href="https://gitlab.com/emetdas552"
              title="gitlab"
              target="_developerEmetdas"
            >
              <i class="fab fa-gitlab"></i>
            </a>
            <a
              href="https://www.pinterest.com/emetdas/"
              title="pinterest"
              target="_developerEmetdas"
            >
              <i class="fab fa-pinterest"></i>
            </a>
            <a
              href="https://www.fiverr.com/emet24"
              title="fiverr"
              target="_developerEmetdas"
            >
              <i class="fab fa-fonticons-fi"></i>
            </a>
          </div>
        </div>

        <div class="skill-progress">
          <h3 class="subheading mb-1">My Skills :</h3>
          <div class="skill-accordion-heading d-flex js-sb active" data-skill="web">
            Web Desing <i class="fas fa-angle-down"></i>
          </div>
          <div class="skill-accordion-body active-accrodion" data-skill="web">
            <!-- skill-progress-start -->
              <li class="skill-progress">
                <div class="progress-heading">Html5</div>
                <div class="progress-bar">
                  <div class="progress" data-progress="99">
                    <span class="progress-presentage">99%</span>
                  </div>
                </div>
              </li>
            <!-- skill-progress-end -->
            <!-- skill-progress-start -->
              <li class="skill-progress">
                <div class="progress-heading">CSS3</div>
                <div class="progress-bar">
                  <div class="progress" data-progress="95">
                    <span class="progress-presentage">95%</span>
                  </div>
                </div>
              </li>
            <!-- skill-progress-end -->
            <!-- skill-progress-start -->
              <li class="skill-progress">
                <div class="progress-heading">Scss</div>
                <div class="progress-bar">
                  <div class="progress" data-progress="95">
                    <span class="progress-presentage">95%</span>
                  </div>
                </div>
              </li>
            <!-- skill-progress-end -->
            <!-- skill-progress-start -->
              <li class="skill-progress">
                <div class="progress-heading">JAVASCRIPT</div>
                <div class="progress-bar">
                  <div class="progress" data-progress="90">
                    <span class="progress-presentage">90%</span>
                  </div>
                </div>
              </li>
            <!-- skill-progress-end -->
          </div>

          <div class="skill-accordion-heading d-flex js-sb" data-skill="web-dev">
            Web Development <i class="fas fa-angle-down"></i>
          </div>
          <div class="skill-accordion-body" data-skill="web-dev">
            <!-- skill-progress-start -->
            <li class="skill-progress">
              <div class="progress-heading">PHP</div>
              <div class="progress-bar">
                <div class="progress" data-progress="87">
                  <span class="progress-presentage">87%</span>
                </div>
              </div>
            </li>
            <!-- skill-progress-end -->
            <!-- skill-progress-start -->
            <li class="skill-progress">
              <div class="progress-heading">MYSQL</div>
              <div class="progress-bar">
                <div class="progress" data-progress="90">
                  <span class="progress-presentage">90%</span>
                </div>
              </div>
            </li>
            <!-- skill-progress-end -->
          </div>

          <div class="skill-accordion-heading d-flex js-sb" data-skill="app-dev">
            App Development <i class="fas fa-angle-down"></i>
          </div>
          <div class="skill-accordion-body" data-skill="app-dev">
            <!-- skill-progress-start -->
            <li class="skill-progress">
              <div class="progress-heading">Flutter</div>
              <div class="progress-bar">
                <div class="progress" data-progress="50">
                  <span class="progress-presentage">50%</span>
                </div>
              </div>
            </li>
            <!-- skill-progress-end -->
            <!-- skill-progress-start -->
            <li class="skill-progress">
              <div class="progress-heading">Firebase</div>
              <div class="progress-bar">
                <div class="progress" data-progress="90">
                  <span class="progress-presentage">90%</span>
                </div>
              </div>
            </li>
            <!-- skill-progress-end -->
          </div>


        </div>
      </div>
    </section>
    <!-- About-end -->
    <!-- Porsess-of-Development-start -->
    <div class="step-of-dev container d-grid"> 
      <div class="setps d-grid">
        <div class="step d-flex">
          <div class="step-icon">
            <img src="images/idea.svg" alt="step-icon" />
          </div>
          <div class="step-content">
            <h4 class="step-heading">Research</h4>
            <p class="paragraph"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse vel iure minima! Repellat modi doloribus delectus eius quod unde blanditiis voluptatibus sequi qui accusamus velit optio quam hic architecto sed, exercitationem sunt. Ut architecto at assumenda, qui vitae est fuga?
            </p>
          </div>
        </div>
        <div class="step d-flex">
          <div class="step-icon">
            <img src="images/web-design.svg" alt="step-icon" />
          </div>
          <div class="step-content">
            <h4 class="step-heading">Desging</h4>
            <p class="paragraph">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse vel iure minima! Repellat modi doloribus delectus eius quod unde blanditiis voluptatibus sequi qui accusamus velit optio quam hic architecto sed, exercitationem sunt. Ut architecto at assumenda, qui vitae est fuga?
            </p>
          </div>
        </div>
        <div class="step d-flex">
          <div class="step-icon">
            <img src="images/php.svg" alt="step-icon" />
          </div>
          <div class="step-content">
            <h4 class="step-heading">Development</h4>
            <p class="paragraph">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse vel iure minima! Repellat modi doloribus delectus eius quod unde blanditiis voluptatibus sequi qui accusamus velit optio quam hic architecto sed, exercitationem sunt. Ut architecto at assumenda, qui vitae est fuga?
            </p> 
          </div>
        </div>
      </div>
      <div class="img_step_of_dev">
        <img src="images/step-dev2.svg" alt="step-of-development">
        <!-- <img src="images/step-dev.svg" alt="step-of-development" /> -->
      </div>
    </div>
    <!-- Porsess-of-Development-end -->
    <!-- Portfolio-start -->
    <section id="portfolio" class="container">
      <div class="container text-center">
        <h2 class="heading">Portfolio</h2>
      </div>
      <div class="protfolio-link-container container">
        <div class="protfolio-links text-center">
          <li class="protfolio-link active" data-protfolio="all">All</li>
          <li class="protfolio-link" data-protfolio="web">Web Design</li>
          <li class="protfolio-link" data-protfolio="dev">Web Development</li>
          <li class="protfolio-link" data-protfolio="app">App Development</li>
        </div>
      </div>
      <div class="d-grid portfolio-items container py2">
        <div class="portfolio-item" data-protfolio="web">
          <div class="portfolio-img-container">
            <div class="portfolio-img">
              <img
                src="images/project-1.png"
                alt="update"
                class="protfolio-image"
              />
            </div>
            <div class="portfolio-img-content-overlay">
              <div class="overlay-content">
                <div class="ind-flex d-flex">
                  <div class="icon-content d-flex">
                    <i class="far fa-heart"></i>
                    <span>20</span>
                    <span>Likes</span>
                  </div>
                  <div class="icon-content d-flex">
                    <i class="fas fa-eye"></i>
                    <span>20</span>
                    <span>Views</span>
                  </div>
                </div>
              </div>
              <div class="content-hart">
                <i class="far fa-heart"></i>
              </div>
            </div>
            <div class="portfolio-img-overlay-hover">
              <a href="#!">
                <i class="fas fa-link"></i>
              </a>
            </div>
          </div>
          <div class="portfolio-contant text-center">
            <h3 class="protfolio-heading">E-commerce</h3>
            <span class="protfolio-subheading">Web Design</span>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio-end -->
    <!-- What i do-start -->
    <section id="ido">
      <div class="container text-center">
        <h2 class="heading">What i do</h2>
      </div>
      <div class="what-do-item d-grid container">
        <div class="what-do">
          <i class="fas fa-desktop fa-3x"></i>
          <h3 class="subheading">Web Design</h3>
          <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi
            illum maxime vero unde sint labore, quia quis. Accusamus, officia
            iure.
          </p>
        </div>
        <div class="what-do">
          <i class="far fa-file-code fa-3x"></i>
          <h3 class="subheading">Web Development</h3>
          <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi
            illum maxime vero unde sint labore, quia quis. Accusamus, officia
            iure.
          </p>
        </div>
        <div class="what-do">
          <i class="fas fa-mobile-alt fa-3x"></i>
          <h3 class="subheading">App Development</h3>
          <p class="paragraph">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi
            illum maxime vero unde sint labore, quia quis. Accusamus, officia
            iure.
          </p>
        </div>
      </div>
    </section>
    <!-- What i do-end -->
    <!-- testimonial-start -->
    <section id="testimonial">
      <div class="container text-center">
        <h2 class="heading">Testimonial</h2>
      </div>
      <div class="container">
        <div class="testimonial-slider-container">
          <div class="d-flex testimonial-slider">
            <div class="testimonial-slider-item">
              <img
                src="images/feadback-1.png"
                alt="client-image"
                class="client-image"
              />
              <h4 class="client-name">Mia Kely</h4>
              <h5 class="client-position">Web Developer</h5>
              <p class="paragraph client-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam
                nulla exercitationem necessitatibus nobis sit eligendi.
              </p>
            </div>
            <div class="testimonial-slider-item">
              <img
                src="images/feadback-2.png"
                alt="client-image"
                class="client-image"
              />
              <h4 class="client-name">Jonas Smithman</h4>
              <h5 class="client-position">Data Sicentce</h5>
              <p class="paragraph client-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam
                nulla exercitationem necessitatibus nobis sit eligendi.
              </p>
            </div>
            <div class="testimonial-slider-item">
              <img
                src="images/feadback-3.png"
                alt="client-image"
                class="client-image"
              />
              <h4 class="client-name">Jolia</h4>
              <h5 class="client-position">App Developer</h5>
              <p class="paragraph client-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam
                nulla exercitationem necessitatibus nobis sit eligendi.
              </p>
            </div>
          </div>
          <div class="testimonial-slider-controler">
            <i class="fas fa-angle-left arrow-left"></i>
            <i class="fas fa-angle-right arrow-right"></i>
          </div>
        </div>
      </div>
    </section>
    <!-- testimonial-end -->
    <!-- Recent-Blog-start -->
    <section class="Blog">
      <div class="container text-center">
        <h2 class="heading">Blogs</h2>
      </div>
      <div class="d-grid blog-container container">
        <div class="blog-items">
          <img src="images/project-03-thumbnail.png" alt="Blog" />
          <div class="date">
            <span> 20 </span>
            <span> Jun </span>
            <span> 2021 </span> 
          </div>
            <div class="blog-content">
              <h3 class="blog-heading">Web Desing</h3>
              <p class="paragraph">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ipsum, accusantium impedit nobis recusandae ab similique commodi quia sequi harum!
              </p>
              <a href="#!" target="_Blog" class="blog-btn">
                <i class="fas fa-globe"></i>
                Visit Blog
              </a>
            </div>
        </div>
      </div>
    </section>
    <!-- Recent-Blog-end -->
    <!-- Footer-start -->
    <section class="footer">
      <div class="footer-container d-flex container js-sb">  
        <div class="footer-item-copyright"> 
          <span> &copy; 2021.Emet </span>
          <a href="#!">About Us</a>
          <a href="#!">Blog</a>
          <a href="#!">Contact Us</a>
        </div>
        <div class="footer-social">
          <a
            href="https://www.facebook.com/emet.me/?view_public_for=100465838486186"
            title="facebook"
            target="_developerEmetdas"
          >
            <i class="fab fa-facebook-f"></i>
          </a>
          <a
            href="https://twitter.com/DasEmet"
            title="twitter"
            target="_developerEmetdas"
          >
            <i class="fab fa-twitter"></i>
          </a>
          <a
              href="https://www.instagram.com/emetdas24/"
              title="instagram"
              target="_developerEmetdas"
            >
              <i class="fab fa-instagram"></i>
            </a>
            <a
              href="https://github.com/emetdas"
              title="github"
              target="_developerEmetdas"
            >
              <i class="fab fa-github"></i>
            </a>
        </div>
      </div>
    </section>
    <!-- Footer-end -->
    <!-- contact-start -->
    <div class="contact">
        <div class="contact-container">
          <i class="fas fa-times"></i>
          <form method="POST" enctype="multipart/form-data" id="contact-form">
            <h2 class="text-center">Message Me</h2>
            <div class="form-container">
              <label for="name">Name</label>
              <input type="text" id="name" name="name">
            </div>
            <div class="form-container">
              <label for="email">Email</label>
              <input type="email" id="email" name="email">
            </div>
            <label for="message">Message</label>
            <textarea name="message" id="message"></textarea>
            <button type="submit" class="submit">Send Message</button>
            <div class="error-txt"></div>
          </form>
        </div>
    </div>
    <!-- contact-end -->
    <script src="js/main.js"></script>
  </body>
</html>
