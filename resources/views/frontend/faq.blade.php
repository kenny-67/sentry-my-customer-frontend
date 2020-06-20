<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="frontend/assets/css/header-footer.css">
  <!-- link to faq css -->
  <link rel="stylesheet" href="frontend/assets/css/faq.css">
  <title>MyCustomer - FAQ</title>
  <script src="https://kit.fontawesome.com/25fffa082a.js" crossorigin="anonymous"></script>
</head>

<body>


  <!-- Header start -->
  <header>
    <nav>
      <div class="container nav">
        <div class="nav__brand">
          <a href="#" class="nav__brand__logo">MyCustomer</a>
        </div>
        <div class="nav__menu">
          <div class="menu__container">
            <ul class="menu__list">
              <li class="menu__list__item"><a href="/" class="menu__list__link">Home</a></li>
              <li class="menu__list__item"><a href="/about" class="menu__list__link">About</a></li>
              <li class="menu__list__item"><a href="/faq" class="menu__list__link">FAQ</a></li>
              <li class="menu__list__item"><a href="/contact-us" class="menu__list__link">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="nav__button__container">
          <button class="nav__button "><a href="" class="nav__button__link">Log In</a></button>
          <button class="nav__button btn-nav-active"><a href="" class="nav__button__link__active">Sign Up</a></button>
        </div>
        <div class="hamburger-container">
          <div class="hamburger__menu">
            <div class="menubar menu-bar-one"></div>
            <div class="menubar menu-bar-two"></div>
            <div class="menubar menu-bar-three"></div>
          </div>
        </div>
      </div>
      <div id="mobile-menu" class="mobile-menu">
        <div class="close-mobile-menu">
          <i class="fas fa-times"></i>
        </div>
        <div class="mobile__nav__menu">
          <div class="mobile__menu__container">
            <ul class="mobile__menu__list">
              <li class="mobile__menu__list__item"><a href="/index" class="mobile__menu__list__link">Home</a>
              </li>
              <li class="mobile__menu__list__item"><a href="/about" class="mobile__menu__list__link">About</a>
              </li>
              <li class="mobile__menu__list__item"><a href="/faq" class="mobile__menu__list__link">FAQ</a></li>
              <li class="mobile__menu__list__item"><a href="/contact-us" class="mobile__menu__list__link">Contact
                  Us</a></li>
            </ul>
          </div>
          <div class="mobile__nav__button__container">
            <button class="mobile__nav__button"><a href="" class="mobile__nav__button__link">Log In</a></button>
            <button class="mobile__nav__button"><a href="" class="mobile__nav__button__link">Sign Up</a></button>
          </div>
        </div>
      </div>
    </nav>

  </header>
  <!-- header end -->


  <!-- top section -->
  <section id="main" class="faq-top">
    <div class="container">
      <div class="faq-top__content text-center">
        <h1 class="faq-top__title">Frequently Asked Questions</h1>
        <input type="search" name="search-faq" id="search-faq" class="form-control" placeholder="Search for a question"
          aria-placeholder="Search for a question">
        <button class="faq-top__btn">Search</button>
      </div>
    </div>
    <!-- background vectors -->
    <div class="faq-bg__left">
      <img src="frontend/assets/img/faq-bg/orange-cutout.png" alt="orange-cutout" class="faq-bg__orange-cutout img-fluid">
      <img src="frontend/assets/img/faq-bg/yellow-cutout.png" alt="yellow-cutout" class="faq-bg__yellow-cutout img-fluid">
    </div>
    <div class="faq-bg__right">
      <img src="frontend/assets/img/faq-bg/blue-cutout.png" alt="blue-cutout" class="faq-bg__blue-cutout img-fluid">
      <img src="frontend/assets/img/faq-bg/orange-triangle-cutout.png" alt="orange-triangle-cutout"
        class="faq-bg__orange-triangle-cutout img-fluid">
    </div>
  </section>
  <!-- questions in accordion -->
  <section class="faq">
    <div class="container faq__accordion">
      <div class="accordion" id="faq__accordion">
        <!-- Question one -->
        <div class="card">
          <div class="card-header" id="headingOne">
            <button class="faq__btn collapsed" type="button" data-toggle="collapse" data-target="#questionOne"
              aria-expanded="false" aria-controls="questionOne">
              <h2 class="faq__title mb-0">What is myCustomer?</h2>
              <i class="fas fa-angle-up"></i>
            </button>
          </div>
          <!-- Question one body -->
          <div id="questionOne" class="collapse" aria-labelledby="headingOne" data-parent="#faq__accordion">
            <div class="card-body">
              <p class="faq__content">myCustomer is solution that helps business owners send overdue invoice reminders,
                manage debt collection and provides a unique way of pushing unique sales messaging directly to their
                customers.</p>
            </div>
          </div>
        </div>

        <!-- Question two -->
        <div class="card">
          <div class="card-header" id="headingTwo">
            <button class="faq__btn collapsed" type="button" data-toggle="collapse" data-target="#questionTwo"
              aria-expanded="false" aria-controls="questionTwo">
              <h2 class="faq__title mb-0">Why should I use myCustomer?</h2>
              <i class="fas fa-angle-up"></i>
            </button>
          </div>
          <!-- Question two body -->
          <div id="questionTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faq__accordion">
            <div class="card-body">
              <p class="faq__content">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                sustainable VHS.</p>
            </div>
          </div>
        </div>
        <!-- Question three -->
        <div class="card">
          <div class="card-header" id="headingThree">
            <button class="faq__btn collapsed" type="button" data-toggle="collapse" data-target="#questionThree"
              aria-expanded="false" aria-controls="questionThree">
              <h2 class="faq__title mb-0">How can I download the app?</h2>
              <i class="fas fa-angle-up"></i>
            </button>
          </div>
          <!-- Question three body-->
          <div id="questionThree" class="collapse" aria-labelledby="headingThree" data-parent="#faq__accordion">
            <div class="card-body">
              <p class="faq__content">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                sustainable VHS.</p>
            </div>
          </div>
        </div>
        <!-- Question four -->
        <div class="card">
          <div class="card-header" id="headingFour">
            <button class="faq__btn collapsed" type="button" data-toggle="collapse" data-target="#questionFour"
              aria-expanded="false" aria-controls="questionFour">
              <h2 class="faq__title mb-0">Will I need data to make use of the app?</h2>
              <i class="fas fa-angle-up"></i>
            </button>
          </div>
          <!-- Question four body -->
          <div id="questionFour" class="collapse" aria-labelledby="headingFour" data-parent="#faq__accordion">
            <div class="card-body">
              <p class="faq__content">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                sustainable VHS.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer start -->
  <footer>
    <div class="container footer__container">
      <div class="row">
        <div class="col-lg-6 footer_left">
          <div class="footer__brand__container">
            <p class="footer__brand">MyCustomer</p>
            <a href="/" class="footer__brand__tagline">customerpay.me</a>
          </div>
        </div>
        <div class="col-lg-6 footer_right">
          <div class="footer__menu">
            <div class="footer__menu__container">
              <ul class="footer__menu__list">
                <li class="footer__menu__list__item"><a href="/" class="footer__menu__list__link">Home</a></li>
                <li class="footer__menu__list__item"><a href="/about" class="footer__menu__list__link">About</a>
                </li>
                <li class="footer__menu__list__item"><a href="/faq" class="footer__menu__list__link">FAQ</a></li>
                <li class="footer__menu__list__item"><a href="/contact-us" class="footer__menu__list__link">Contact
                    Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="social-buttons">
            <a href="#" class="social-link"><i class="social-button__icon fab fa-facebook-f"></i></a>
            <a href="#" class="social-link"><i class="social-button__icon fab fa-twitter"></i></a>
            <a href="#" class="social-link"><i class="social-button__icon fab fa-instagram"></i></i></a>
          </div>
        </div>
      </div>
  </footer>
  <!-- Footer end -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="frontend/assets/js/header-footer.js"></script>
</body>

</html>
