<!DOCTYPE html>
<html>
<head>
    <!--Meta Starts-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="oEyls6Ht8NlKSbRCQGNMaK-NT9GthyT7mjmRtwW2dNQ" />

    <meta name="description" content="JosephThen MGD: Capturing the future and creating meanings through media production and graphic designs." />
    <meta name="author" content="Joseph Then">
    <meta name="keywords" content="josephthen, joseph, thenara, graphic, design, video, production, multimedia, media, portfolio, photo, photography, videography, blog">

    <!-- OpenGraph -->
    <meta property='og:title' content='JosephThen Multimedia & Design'/>
    <meta property='og:image' content='http://static.josephthenara.com/jt-assets/images/josephthenaracom-main.jpg'/>
    <meta property='og:description' content='Capturing the future and creating meanings through media production and graphic designs.'/>
    <meta property='og:url' content='http://josephthenara.com/' />
    <!-- OG Ends -->
    <!--Meta Ends-->
    <title>&lt/JOSEPH.THEN&gt</title>

    <link rel="stylesheet" href="http://static.josephthenara.com/jt-assets/css/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="http://static.josephthenara.com/jt-assets/css/main.css">
</head>
<style>
    /* Create a Parallax Effect */
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
        background-image: url('http://static.josephthenara.com/jt-assets/images/slideshow/05.jpg');
        min-height: 100%;
    }

    /* Second image (Portfolio) */
    .bgimg-2 {
        background-image: url("http://static.josephthenara.com/jt-assets/images/slideshow/02.jpg");
        min-height: 400px;
    }

    /* Third image (Contact) */
    .bgimg-3 {
        background-image: url("http://static.josephthenara.com/jt-assets/images/slideshow/03.jpg");
        min-height: 400px;
    }

    .w3-wide {letter-spacing: 10px;}
    .w3-hover-opacity {cursor: pointer;}

    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1600px) {
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
            min-height: 400px;
        }
    }
</style>

<body ondragstart="return false" onselectstart="return false">
<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar" id="myNavbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
        </a>
        <a href="#home" class="w3-bar-item w3-button">HOME</a>
        <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
        <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
        <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
        <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
        <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
        <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">&lt/JOSEPH.THEN&gt</span>
    </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
    <h3 class="w3-center">ABOUT ME</h3>
    <p class="w3-center"><em>I speak motion pictures.</em></p><br>
    <hr />
    <h5><b>Motion Pictures</b> -n. /ˈmōSH(ə)n - pik(t)SHər/</h5>
    <p>a series of pictures projected on a screen in rapid succession with objects shown in successive positions slightly changed so as to produce the optical effect of a continuous picture in which the objects move.</p>
    <hr />
    <div class="w3-row">
        <div class="w3-col m6 w3-center w3-padding-large">
            <p><b><i class="fa fa-user w3-margin-right"></i>Joseph Manuel Thenara</b></p>
            <img src="img/Me.JPG" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" style="height: 300px;">
        </div>

        <!-- Hide this text on small devices -->
        <div class="w3-col m6  w3-padding-large">
            <p>
                Welcome to my website.
            </p>
            <p>
                I am Joseph Manuel Thenara, founder of JosephThen Multimedia and Graphic Design, a motion picture producer based in Indonesia and China.
            </p>
            <p>
                I am an observer that seeks beauty in things through multiple perspectives. Having 10 years of motion pictures production experience for public and personal projects,
                I love surprising my audience through unexpected, yet pleasant effects that I incorporate in almost all of my productions.
            </p>
            <p>
                I am currently a qualifying-year student of Computer Science with Artificial Intelligence in The University of Nottingham Ningbo China (UNNC).
            </p>
            <p>
                I also love cats and minimal designs.
            </p>
            <h6><strong>
                Scroll down to see my works!
            </strong></h6>
        </div>
    </div>
    <hr />
    <p class="w3-large w3-center w3-padding-16">I am really good at:</p>
    <p class="w3-wide"><i class="fa fa-camera fa-fw"></i> Film Production</p>
    <div class="w3-light-grey">
        <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-laptop fa-fw"></i> Graphic Design</p>
    <div class="w3-light-grey">
        <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-globe fa-fw"></i> Web Design</p>
    <div class="w3-light-grey">
        <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-pencil-alt fa-fw"></i> Teaching</p>
    <div class="w3-light-grey">
        <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:60%">60%</div>
    </div>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">5+</span><br>
        Partners
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">20+</span><br>
        Projects Done
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">44+</span><br>
        Happy Clients
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">150+</span><br>
        Meetings
    </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
    </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
    <h3 class="w3-center">FEATURED WORK</h3>
    <p class="w3-center"><em>My favorite works selected for your viewing.<br>Click the picture to enlarge.</em></p><br>

    <!-- Slideshow Section Trial -->
    <div class="w3-container">
      <div class="w3-display-container">
          <img class="mySlides w3-animate-opacity" src="http://static.josephthenara.com/jt-assets/images/unnc-trent-bd/Trent-Bleak-Days.jpg" style="width:100%" onclick="onClick(this)" alt="Trent (Bleak)">
          <img class="mySlides w3-animate-opacity" src="http://static.josephthenara.com/jt-assets/images/unnc-trent-bd/Trent-Hopeful-Days.jpg" style="width:100%" onclick="onClick(this)" alt="Trent (Hopeful)">
          <img class="mySlides w3-animate-opacity" src="http://static.josephthenara.com/jt-assets/images/unnc-trent-bd/Trent-at-Sunset.jpg" style="width:100%" onclick="onClick(this)" alt="Trent (Sunset)">
          <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
              <div class="w3-left w3-hover-text-khaki w3-button w3-hover-blue w3-black" onclick="plusDivs(-1)">&#10094;</div>
              <div class="w3-right w3-hover-text-khaki w3-button w3-hover-blue w3-black" onclick="plusDivs(1)">&#10095;</div>

                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)" style="height:13px;width:13px;padding:0"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)" style="height:13px;width:13px;padding:0"></span>
                <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)" style="height:13px;width:13px;padding:0"></span>

          </div>
      </div>
      <div class="w3-container w3-bar w3-blue w3-center">
        <h6 class="">UNNC Trent Building Series</h6>
      </div>
    </div>
<hr/>
    <h3 class="w3-center">FEATURED VIDEO PRODUCTION</h3>
    <p class="w3-center"><em>My latest video production.</em></p>
    <div class="w3-container w3-center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/fDxiG8FFJlg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
<hr/>

    <h4 class="w3-center">GALLERY</h4>
    <p class="w3-center"><em>Click the button below for some of my latest motion films and photography work.</em></p>
    <a href="works.php" class="w3-button w3-bar w3-content w3-dark-grey w3-padding w3-round-xlarge"><h5>Enter Gallery <i class="fa fa-fw fa-arrow-right"></i></h5></a>
    <hr />

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <!-- First Row of Portfolio -->
<!--
    <div class="w3-row-padding w3-center">
        <div class="w3-col m3">
            <img src="http://static.josephthenara.com/jt-assets/images/unnc-trent-bd/Trent-Bleak-Days.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Trent (Bleak)">
        </div>

        <div class="w3-col m3">
            <img src="http://static.josephthenara.com/jt-assets/images/unnc-trent-bd/Trent-Hopeful-Days.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Trent (Hopeful)">
        </div>

        <div class="w3-col m3">
            <img src="http://static.josephthenara.com/jt-assets/images/unnc-trent-bd/Trent-at-Sunset.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Trent (Sunset)">
        </div>

        <div class="w3-col m3">
            <img src="img/works/Work-02.JPG" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
        </div>
    </div>
  -->

    <!-- Second Row of Portfolio -->
<!--
    <div class="w3-row-padding w3-center w3-section">
        <div class="w3-col m3">
            <img src="img/works/Work-02.JPG" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
        </div>

        <div class="w3-col m3">
            <img src="img/works/Work-02.JPG" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
        </div>

        <div class="w3-col m3">
            <img src="img/works/Work-02.JPG" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
        </div>

        <div class="w3-col m3">
            <img src="img/works/Work-02.JPG" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
        </div>
        <a href="works.html"><button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button></a>
    </div>
-->

</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
    </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide">CONTACT ME</span>
    </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
    <h3 class="w3-center">WHERE I WORK</h3>
    <p class="w3-center"><em>I'm looking forward to hearing from you</em></p>

    <div class="w3-row w3-padding-32 w3-section">
        <div class="w3-col m4 w3-container w3-center">
            <img src="img/logo4.png" class="w3-image w3-round" style="width:75%">
        </div>
        <div class="w3-col m8 w3-panel">
            <div class="w3-large w3-margin-bottom">
                <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> 199 Taikang East Rd. Ningbo, Zhejiang, PRC<br>
                <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <a href="tel:+86185-2011-7756">(+86) 185.2011.7756</a><br>
                <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <a href="mailto:josephthen@josephthenara.com"> JosephThenara</a> | <a href="mailto:josephthen3320@outlook.com">Outlook</a> <br>
                <i class="fab fa-weixin fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> JMT147 (<a href="https://web.wechat.com" target="_blank">Web</a>)
            </div>
            <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
            <form action="" target="_blank">
                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                    </div>
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                    </div>
                </div>
                <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                <button class="w3-button w3-black w3-right w3-section" type="submit">
                    <i class="fa fa-paper-plane"></i> SEND MESSAGE
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16 ">
    <div class="w3-xlarge w3-section">
        <div class="w3-container">
            <table class="w3-table w3-centered">
                <tr>
                    <td width="45%"></td>
                    <td>
                        <a href="http://fwd.josephthenara.com/Twitter" target="_blank">
                            <i class="fab fa-twitter fa-fw w3-hover-opacity"></i>
                        </a>
                    </td>
                    <td></td>
                    <td>
                        <a href="http://fwd.josephthenara.com/LinkedIn" target="_blank">
                            <i class="fab fa-linkedin-in fa-fw w3-hover-opacity"></i>
                        </a>
                    </td>
                    <td></td>
                    <td>
                        <a href="http://fwd.josephthenara.com/Instagram-MGD" target="_blank">
                            <i class="fab fa-instagram fa-fw w3-hover-opacity"></i>
                        </a>
                    </td>
                    <td></td>
                    <td>
                        <a href="http://fwd.josephthenara.com/Instagram" target="_blank">
                            <i class="fab fa-instagram-square fa-fw w3-hover-opacity"></i>
                        </a>
                    </td>
                    <td></td>
                    <td>
                        <a href="http://fwd.josephthenara.com/YouTube" target="_blank">
                            <i class="fab fa-youtube fa-fw w3-hover-opacity"></i>
                        </a>
                    </td>
                    <td width="45%"></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="w3-center w3-black w3-padding-2"><p style="font-size: 10pt;">© 2020 | Joseph Then</p></div>
</footer>

<script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function() {myFunction()};
    function myFunction() {
        var navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
        } else {
            navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
        }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

<!-- SLIDESHOW SCRIPT BEGINS -->
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " w3-white";
    }

</script>

</body>
</html>
