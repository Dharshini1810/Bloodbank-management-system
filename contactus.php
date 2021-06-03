<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rapid Res'Q</title>
    <link rel="stylesheet" href="css/contactus.css" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <span class="big-circle"></span>
        <img src="contactusimg/shape.png" class="square" alt="" />
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">
                    Rapid Res'Q, an integrated bloodbank management website, allows scalability and performance.An initiative way to connect, digitize and streamline the workflow of blood bank. Feel free to connect with us !!
                </p>

                <div class="info">
                    <div class="information">
                        <img src="contactusimg/location.png" class="icon" alt="" />
                        <p>123 xyz lane, pqrs-12</p>
                    </div>
                    <div class="information">
                        <img src="contactusimg/email.png" class="icon" alt="" />
                        <p>norapidres'q@gmail.com</p>
                    </div>
                    <div class="information">
                        <img src="contactusimg/phone.png" class="icon" alt="" />
                        <p>97x-xxx-xx32</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us !!</p>
                    <div class="social-icons">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form id="contactForm" action="">
                    <h3 class="title">Contact us</h3>
                    <div class="input-container">
                        <input id="name" type="text" name="name" class="input" required />
                        <label for="">Name</label>
                        <span>Name</span>
                    </div>
                    <div class="input-container">
                        <input id="email" type="email" name="email" class="input" required />
                        <label for="">Email Id</label>
                        <span>Email Id</span>
                    </div>
                    <div class="input-container">
                        <input id="contactno" type="tel" name="phone" class="input" required />
                        <label for="">Contact No</label>
                        <span>Contact No</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea id="message" name="message" class="input" required></textarea>
                        <label for="">Message</label>
                        <span>Leave a message</span>
                    </div>
                    <input type="submit" class="Submit" />
                </form>
            </div>
        </div>
    </div>

    <script src="https://www.gstatic.com/firebasejs/8.5.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.5.0/firebase-database.js"></script>
    <script src="assets/js/contactForm.js"></script>
    <script src="assets/js/contactusflip.js"></script>
</body>

</html>