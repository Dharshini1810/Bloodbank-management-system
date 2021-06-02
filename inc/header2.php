<!DOCTYPE html>
<?php
  session_start();
  include 'dbh.php'; 
  include 'connect.php'
?>
<html lang="en">
    <head>
        <meta charset="UTF-8"> 
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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

                    <ul class="nav__list" style="margin-right: -200px;">
                          <li class="nav__item"><a href="service.php" class="nav__link">HOME</a></li>
                        <li class="nav__item"><a href="all_request.php" class="nav__link">ALL REQUEST</a></li>
                        <li class="nav__item"><a href="deleted_donors.php" class="nav__link">DELETED REQUEST</a></li>
	        <li class="nav__item"><a href="index1.php" class="nav__link">LOGOUT</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        </body>
<html>