<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- =====BOX ICONS===== -->  
        <link href="assets/css/styles.css" rel="stylesheet">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">    
        <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>


        <!-- ===== CSS ===== -->
        <title>Rapid Res'Q</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <!--<a href="#" class="nav__logo">Coffee</a>-->
                </div>
                
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">HOME</a></li>
                        <li class="nav__item"><a href="signinregister.php" class="nav__link">SIGNIN</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">ABOUT</a></li>
                        <li class="nav__item"><a href="contactus.php" class="nav__link">CONTACT</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <div class="home__img">
                        <img src="assets/img/img1.png" alt="" data-speed="-2" class="move">
                        <img src="assets/img/img2.png" alt="" data-speed="2" class="move">
                        <img src="assets/img/img3.png" alt="" data-speed="2" class="move">
                        <img src="assets/img/img4.png" alt="" data-speed="-2" class="move">
                        <img src="assets/img/img5.png" alt="" data-speed="-2" class="move">
                        <img src="assets/img/frontpage.png" alt="" data-speed="2" class="move">
                    </div>

                    <div class="home__data">
                        <h1 style="font-weight:bolder" class="home__title">Rapid Res'Q</h1>
                        <p class="home__description">Donate !! It's a bloody good job..!!</p>
                        <a href="signinregister.php" class="home__button">Get Started</a>
                    </div>
                </div>
            </section>
        </main>  
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary" style="padding-left: 39rem; font-size:34px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight:bolder; font-style:italic;">Why <span style="color:red;">blood</span> donation ??</h2>
            </div> 
            <div class="col-md-6" style="padding-left: 35px; margin-top: 50px;">
              

			<ul> 
				<li><span style="font-size: 30px; color:red;">?</span> Giving blood saves lives. The blood you give is a lifeline in an emergency and for people who need<br> long-term treatments.</li>

				<li><span style="font-size: 30px; color:red;">?</span> Many people would not be alive today if donors had not generously given their blood.</li>

				<li><span style="font-size: 30px;  color:red;">?</span> We need over 6,000 blood donations every day to treat patients in need across india. Which is why<br> there’s always a need for people to give blood.</li>

				<li><span style="font-size: 30px;  color:red;">?</span> Each year we need approximately 200,000 new donors, as some donors can no longer give blood.</li>

				<li><span style="font-size: 30px;  color:red;">?</span> Most people between the ages of 17-65 are able to give blood.</li>

				<li><span style="font-size: 30px;  color:red;">?</span> Around half our current donors are over 45. That's why we need more young people(Age of 17)<br> to start giving blood, so we can make sure we have enough blood in the future.</li>

			</ul>
            </div> 
            <div class="col-md-6">
                <img class="img-responsive" src="assets/img/section.jpg"  style="padding-left: 55rem; margin-top: -365px;" alt="">
            </div>
        </div> 
        <footer href="assets/css/styles.css" rel="stylesheet">
        <div class=" footer-container">
          <div class="left-col">
            <!--<img src="logo.png" alt="" class="logo">-->
            <h1>Rapid<span>Res'Q</span></h1>  
            <div class="social-media">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fas fa-envelope"></i></a>
            </div>
            <p class="rights-text">© 2020 Created By Rapid Res'Qers All Rights Reserved.</p>
          </div>
  
          <div class="right-col">
            <h1>Our Newsletter</h1>
            
            <p>Enter Your Email to get our news and updates.</p>
            <form action="" class="newsletter-form">
              <input type="text" class="txtbx" placeholder="Enter Your Email">
              <input type="submit" class="btnsubmit" placeholder="submit">
            </form>
          </div>
        </div> 
      </footer> 

        <!--===== GSAP =====-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>