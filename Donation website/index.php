<!DOCTYPE html>
<html>

<head>
  <title>NGO website</title>
  <link rel="stylesheet" type="text/css" href="./Donation website/css/index.css">

</head>

<body>
  <div class="main-heading">
      <img id="title-img" src="./Donation website/images/logoleft.jpg">
    <h1>
      DAANVEER
    </h1>

    <div class="flex-container">
      <ul>
        <li><a href="./Donation website/index.html"><b>Home</b></a></li>
        <li><a href="./Donation website/aboutus.html"><b>About us</b></a></li>
        <li><a href="./Donation website/contact.html"><b>Contact</b></a></li>
        <li><a href="./Donation website/feedback.html"><b>Feedback</b></a></li>
      </ul>
    </div>

  </div>

  <div class="marquee1">
    <marquee direction="left">Giving is not just about to make a donation,its about making a DIFFERENCE -Gash Curley
    </marquee>
  </div>

  <div class="image-container-1">
    <div class="slideshow">
      <img class="mySlides" src="./Donation website/images/donation.jpg">
      <img class="mySlides" src="./Donation website/images/charity.jpg">
      <img class="mySlides" src="./Donation website/images/Food.jpg">
    </div>


  </div>

  <br> <a class="donateb" href="./Donation website/signup.html"><button>Donate Now</button></a><br> <br>


  </div>
  <div class="image-container-2">
    <div class="slideshow1">
      <img class="mySlides1" src="./Donation website/images/nana.png">
      <img class="mySlides1" src="./Donation website/images/akshaykumar.png">
      <img class="mySlides1" src="./Donation website/images/bankimoon.png">
    </div>

  </div>


  <div class="feedback">
      <div class="inner-feedback">
        <li><a href="./Donation website/History.html">History</a></li>
        <li><a href="www.google.com">Contact us</a></li>
        <li><a href="./Donation website/vision.html">Vision</a></li>
        <li><a href="www.google.com">Team</a></li>
      </div>
      <div class="branches">
        <li><a href=""></a>Visit our Branches</li>
        <li><a href="">Terms and Policy</a></li>
        <li><a href=""></a>Privacy</li>
        <li><a href=""></a>Blog</li>
      </div>
  </div>
  <div class="footer">
    Copyright 2019 DAANVEER - Child Rights and you.All rights reserved.

    <script>
      var myIndex = 0;
      carousel1();

      function carousel1() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) { myIndex = 1 }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel1, 3000); // Change image every 4 seconds
      }

      var myIndex = 0;
      carousel();

      function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides1");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) { myIndex = 1 }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 5000);
      }
    </script>
</body>

</html>