<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../Css/Home.css">
</head>
<body>
<!--add navbar start-->
<?php
if(isset($_SESSION['Email'])){
    include "navbar1.php";
}else{
    include "navbar2.php";
}
?>
<!--navbar end-->
<!--    ////////////////////////Slideshow1//////////////////////-->
<div class="slider-container">
    <div class="left-slide">
        <div style="background-color: white">
            <h1>Cases</h1>

        </div>
        <div style="background-color: white">
            <h1>Headset</h1>

        </div>
        <div style="background-color: white">
            <h1>Laptops</h1>
            <p></p>
        </div>
    </div>
    <div class="right-slide">
        <div style="background-image: url('../Imgs/laptop4.png')">
        </div>
        <div style="background-image: url('../Imgs/headset.jpg')">
        </div>
        <div style="background-image: url('../Imgs/case.png')">
        </div>
    </div>

    <div class="action-buttons">
        <button class="down-button">
            <i class="fa fa-arrow-down"></i>
        </button>
        <button class="up-button">
            <i class="fa fa-arrow-up"></i>
        </button>
    </div>
    <script src="../JS/Slideshow.js"></script>
</div>

<div class="wrapper">
    <div id="1" class="box" >
        <div>
            <h1>Guaranteed Warranty<br></h1>
            <i class="fas fa-medal"  style='font-size:48px; color:#001a4d'></i>
            <p><br>Official warranty for all products guaranteed.</p>
        </div>

    </div>
    <div id="2" class="box">
        <div>
            <h1>Pay cash on delivery<br></h1>
            <i class="fas fa-hand-holding-usd " style='font-size:48px; color:#001a4d'></i>
            <p><br>You can pay cash on delivery.</p>
        </div>
    </div>
    <div id="3" class="box">
        <div>
            <h1>express delivery<br></h1>
            <i class="fas fa-shipping-fast" style='font-size:48px; color:#001a4d'></i>
            <p><br>Delivery from one to three days to all areas of the West Bank and Jerusalem.</p>
        </div>
    </div>
</div>
<!--    ////////////////////////Slideshow2//////////////////////-->
<div class="container">
    <h1 style="text-align: center; margin-top:10px; color: #001a4d"> OUR PRODUCTS</h1>
    <input type="radio" name="dot" id="one">
    <input type="radio" name="dot" id="two">
    <div class="main-card">
        <div class="cards" style="margin-top: 50px">
            <div class="card">
                <div class="content">
                    <a href="../PHP/laptops.php" style="color: black; text-decoration: none">
                    <div class="img">
                        <img src="../Imgs/laptop3.jpg" alt="">

                    </div>

                    <div class="details">
                        <div class="name">LAPTOP</div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <a href="../PHP/microphones.php" style="color: black;text-decoration: none">
                    <div class="img">

                        <img src="../Imgs/microphone.jpg" alt="">

                    </div>
                    <div class="details">
                        <div class="name">MICROPHONE</div>
                    </div>
   </a>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <a href="KeyboardandMouse.php" style="text-decoration: none; color: black">
                    <div class="img">
                        <img src="../Imgs/kAndm1.jfif" alt="">

                    </div>
                    <div class="details">
                        <div class="name">KEYBOARD AND MOUSE</div>
                    </div>
                        </a>
                </div>
            </div>
        </div>
        <div class="cards" style="margin-top: 50px">
            <div class="card">
                <div class="content">
                    <a href="../PHP/Headsets.php" style="color: black; text-decoration: none">
                    <div class="img">
                        <img src="../Imgs/headset.jpg" alt="">

                    </div>
                    </a>
                    <div class="details">
                        <div class="name">HEADSET</div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <a href="../PHP/Rams.php" style="color: black; text-decoration: none">
                    <div class="img">

                        <img src="../Imgs/ram2.jpg" alt="">

                    </div>
                    <div class="details">
                        <div class="name">RAM</div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <a href="../PHP/Monitors.php" style="color: black; text-decoration: none">
                    <div class="img">

                        <img src="../Imgs/monitor1.jpg" alt="">

                    </div>
                    <div class="details">
                        <div class="name">MONITOR</div>
                    </div>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="button">
        <label for="one" class=" active one"></label>
        <label for="two" class="two"></label>
    </div>
    <br><br>
    <div class="SeeMore">
        <button class="buttonSeeMore">
             <a href="../PHP/Products.php" style="color: white; text-decoration: none">
            SEE MORE PRODUCTS        </button>


    </div>

</div>


<!--////////////////////////////////////footer//////////////////////////////-->
<br>
<br>
<br>

<footer>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h1 class="logo-text">TECH WORLD</h1>
                <br>
                <br>
                <p >
                    TECH WORLD is a website that helps you blah blah blah.....
                </p>
                <br>
                <br>
            </div>

            <div class="footer-section links">
                <br>
                <br>
                <br>
                <h2 style="font-family: 'Raleway', sans-serif; text-align: center">Quick Links</h2>
                <br>
                <div class="linkColor" >
                    <ul style="list-style-type: none">
                        <a href="Terms.html" target="_blank">
                            <li style="font-family: 'Raleway', sans-serif; text-align: center; ">Terms and Conditions</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="footer-section contact-form">
                <br>
                <br>
                <br>
                <h2 style="font-family: 'Raleway', sans-serif">Contact Us</h2>
                <br>

                <div class="contact">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                    <span style="font-family: 'Raleway', sans-serif">&nbsp; +970-568415330</span>

                    <br>
                    <br>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg>
                    <span style="font-family: 'Raleway', sans-serif">&nbsp; Info@techworld.com </span>

                    <br>
                    <br>

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                    <span style="font-family: 'Raleway', sans-serif">&nbsp;&nbsp; TECH WORLD </span>

                    <br>
                    <br>

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                    <span style="font-family: 'Raleway', sans-serif">&nbsp;&nbsp;&nbsp; TECHWORLD2021 </span>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; TECHWORLD.com | Designed by Farah Touqan & Manal Khalili

        </div>
    </div>
</footer>

</body>
</html>
