<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="signinregister.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  </head>
  <body> 
    <div class="slider owl-carousel">
      <div class="card">
        <div class="img">
<img src="donor.jpg" alt=""></div>
<div class="content">
          <div class="title">
Donor</div>
<div class="sub-title" style="color:#A83E51">
_______________</div>
<p>Are you a donor or wanna to become a donor?? Just click the "Donor" button below and get yourself registered !!
</p>
<div class="btn"> 
          <a href="index2.php">
            <button style="background:#A83E51">Donor</button> 
          </a>  
          </div>
</div>
</div>

         <div class="card">
            <div class="img">
    <img src="admin.jpg" alt=""></div>
    <div class="content">
              <div class="title">
    Admin</div>
    <div class="sub-title" style="color:#A83E51">
    _______________</div> 
    <p>
      Are you an Admin?? Just click the "Admin" button below and navigate to Admin signin page. </p>
      <div class="btn"> 
                <a href="index4.php">  
                  <button style="background:#A83E51">Admin</button>
                </a>  
                </div>
      </div>
      </div>
      <div class="card">
            <div class="img">
    <img src="admin.jpg" alt=""></div>
    <div class="content">
              <div class="title">
    Request Blood</div>
    <div class="sub-title" style="color:#A83E51">
    _______________</div> 
    <p>
      A service section where you need to register for blood request so that donors could get into touch. </p>
      <div class="btn"> 
                <a href="service.php">  
                  <button style="background:#A83E51">Request Blood</button>
                </a>  
                </div>
      </div>
      </div>
    </div> 
      <script>
            $(".slider").owlCarousel({
              loop: false,
              autoplay: true,
              autoplayTimeout: 5000, //5000ms = 5s;
              autoplayHoverPause: true,
            });
          </script>
      
        </body>
      </html>