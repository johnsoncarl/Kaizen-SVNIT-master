<?php //header( 'Location: /index.html' ) ;  ?>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/icon-font.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" type="image/png" href="img-tech/logoWhiteCivilpngclored.png" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />
    <title>Civil Engineering Society</title>
  </head>

  <body>
    <div class="navigation">
      <input type="checkbox" class="navigation__checkbox" id="navi-toggle" />

      <label for="navi-toggle" class="navigation__button">
        <span class="navigation__icon">&nbsp;</span>
      </label>

      <div class="navigation__background">&nbsp;</div>

      <nav class="navigation__nav">
        <ul class="navigation__list">
          <li class="navigation__item">
            <a href="#visiON" class="navigation__link"><span>03</span>Vision</a>
          </li>
          <li class="navigation__item">
            <a href="team.html" class="navigation__link"><span>04</span>Team</a>
          </li>
          <li class="navigation__item">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSdBz8N4HIOVU3GCjZ6W5BSfAqfdjFIP3hAV4JSGNNnnPhd8Mw/viewform" class="navigation__link"><span>04</span>Mentorship Portal</a>
          </li>
          <li class="navigation__item">
            <a target="_self" href="#aboUT" class="navigation__link" onclick="changeDisp(event)"><span>01</span>About Kaizen</a>
          </li>
          <li class="navigation__item">
            <a href="#evenTS" class="navigation__link"><span>02</span>Events</a>
          </li>
          <li class="navigation__item">
            <a href="#Contact" class="navigation__link"><span>05</span>Contact Us</a>
          </li>
        </ul>
      </nav>
    </div>

    <header class="header container-fluid">
      <div class="header__logo-box">
        <img src="img-tech/logoWhiteCivil.png" alt="Logo" class="header__logo" />
      </div>

      <div class="header__text-box">
        <h1 class="heading-primary">
          <span class="heading-primary--main display-1">CES</span>
          <span class="heading-primary--sub">Civil Engineering Society</span>
        </h1>

        <a href="#evenTS" class="btn btn--white btn--animated"
          >Discover Events</a>
        <br/><br/>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdBz8N4HIOVU3GCjZ6W5BSfAqfdjFIP3hAV4JSGNNnnPhd8Mw/viewform" class="btn btn--white btn--animated"
          >Mentorship Portal</a>
      </div>
    </header>

    <main>
      <section class="utube">
        <br><br>
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/LFg5OMZBc-Q" 
          frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
          allowfullscreen></iframe>
      </section>
      
      <section class="section-stories" id="visiON">
        <div class="bg-video">
          <video class="bg-video__content" autoplay muted loop>
            <source src="img/video.mp4" type="video/mp4" />
            <source src="img/video.webm" type="video/webm" />
            Your browser is not supported!
          </video>
        </div>

        <div class="u-center-text u-margin-bottom-big">
          <h2 class="heading-secondary">Our Vision</h2>
        </div>

        <div class="container-fluid">
          <div>
            <div class="container">
              <div class="col-12 col-lg-9">
                <p style="font-size: 18px">
                  CES, NIT Surat aims at providing students with the insights of
                  Civil Engineering through a wide range of events specially
                  designed by our team. With the ever changing technology, CES
                  aims to keep the students updated about the knowledge of the
                  field, thus making it easy for them to decide on their career
                  prospects.
                </p>
              </div>
            </div>
          </div>
        </div>
        <br /><br /><br /><br /><br /><br />
      </section>
      
     
      <br /><br /><br /><br /><br />
      <section class="section-features" id="evenTS">
        <div class="u-center-text u-margin-bottom-big">
          <h2 class="heading-primary--main display-1" style="color:white">
            Events
          </h2>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4">
              <div class="feature-box">
                <i class="feature-box__icon icon-basic-world"></i>
                <h3 class="heading-tertiary u-margin-bottom-small">
                  Technical Events
                </h3>
                <p class="feature-box__text">
                  The human spirit must prevail over technology.
                </p>
                <p>–Albert Einstein</p>
                <br />
                <a href="technical.html" class="btn btn--green">SHOW MORE</a>
              </div>
              <br /><br />
            </div>

            <div class="col-12 col-sm-12 col-md-4">
              <div class="feature-box">
                <i class="feature-box__icon icon-basic-world"></i>
                <h3 class="heading-tertiary u-margin-bottom-small">
                  Managerial Events
                </h3>
                <p class="feature-box__text">
                  Management is, above all, a practice where art, science, and
                  craft meet.
                </p>
                <p>- Henry Mintzberg</p>
                <br />
                <a href="managerial.html" class="btn btn--green">SHOW MORE</a>
              </div>
              <br /><br />
            </div>

            <div class="col-12 col-sm-12 col-md-4">
              <div class="feature-box">
                <i class="feature-box__icon icon-basic-world"></i>
                <h3 class="heading-tertiary u-margin-bottom-small">
                  Informals
                </h3>
                <p class="feature-box__text">
                  Just play. Have fun. Enjoy the game.
                </p>
                <br />
                <p>- Michael Jordan</p>
                <br />
                <a href="informals.html" class="btn btn--green">SHOW MORE</a>
              </div>
              <br /><br />
            </div>
          </div>
        </div>
      </section>

      <section class="section-about" id="aboUT">
        <div class="u-center-text u-margin-bottom-big">
          <h2 class="heading-secondary">About Kaizen</h2>
        </div>
        <div class="conatiner">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-6" style="padding-left: 5%;">
              <h3 class="heading-tertiary u-margin-bottom-small">
                ALL ABOUT THE OLDEST STUDENT CHAPTER...
              </h3>
              <p class="paragraph">
                Kaizen is the annual technical fest of the civil engineering
                society, NIT Surat (CES), the oldest student chapter of Sardar
                Vallabhbhai National Institute of Technology.
              </p>

              <p class="paragraph">
                Since it's inception, Kaizen has been always successful
                in-offering a wild range of events, workshops and fun-field
                games to the students. The 5th installment, KAIZEN 5.0 was held during 1st-3rd February, 2019.
              </p>
              <br /><br /><br /><br />
            </div>
            <div class="col-12 col-sm-12 col-md-6" style="padding-right: 5%;">
              <div class="composition">
                <img
                  srcset="img-tech/img-4.jpg 300w, img-tech/img-4.jpg 1000w"
                  sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                  alt="Photo 1"
                  class="composition__photo composition__photo--p1"
                  src="img-tech/img-4.jpg"
                />

                <img
                  srcset="img-tech/img-2.jpg 300w, img-tech/img-2.jpg 1000w"
                  sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                  alt="Photo 2"
                  class="composition__photo composition__photo--p2"
                  src="img-tech/img-2.jpg"
                />

                <img
                  srcset="img-tech/img-3.JPG 300w, img-tech/img-3.JPG 1000w"
                  sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px"
                  alt="Photo 3"
                  class="composition__photo composition__photo--p3"
                  src="img-tech/img-3.JPG"
                />

                <!--
                                <img src="img/nat-1-large.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                                <img src="img/nat-2-large.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                                <img src="img/nat-3-large.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">
                                -->
              </div>
              <br /><br /><br /><br />
            </div>
          </div>
        </div>
      </section>

      <section class="section-features" id="Contact">
        <div class="u-center-text u-margin-bottom-big">
          <h2 class="heading-primary--main display-1" style="color:white">
            Contact US
          </h2>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-4">
              <div class="feature-box">
                <i class="feature-box__icon icon-basic-world"></i>

                <h3 class="heading-tertiary u-margin-bottom-small">Ritik Dhalvani</h3>
                <p class="feature-box__text">Head</p>
                <p class="feature-box__text">(M) +91-9898221475</p>
                <p class="feature-box__text">ces.svnit2019@gmail.com</p>
              </div>
              <br /><br />
            </div>

            <div class="col-12 col-sm-12 col-md-4">
              <div class="feature-box">
                <i class="feature-box__icon icon-basic-world"></i>

                <h3 class="heading-tertiary u-margin-bottom-small">Vanshita Dhanuka</h3>
                <p class="feature-box__text">Co-Head</p>
                <p class="feature-box__text">(M) +91-9408406848</p>
                <p class="feature-box__text">ces.svnit2019@gmail.com</p>
              </div>
              <br /><br />
            </div>

            <div class="col-12 col-sm-12 col-md-4">
              <div class="feature-box">
                <i class="feature-box__icon icon-basic-world"></i>

                <h3 class="heading-tertiary u-margin-bottom-small">Rahul Galchar</h3>
                <p class="feature-box__text">Co-Head</p>
                <p class="feature-box__text">(M) +91-9106722354</p>
                <p class="feature-box__text">ces.svnit2019@gmail.com</p>
              </div>
              <br /><br />
            </div>

            <!-- <div class="col-12 col-sm-6 col-md-3">
              <div class="feature-box">
                <i class="feature-box__icon icon-basic-world"></i>

                <h3 class="heading-tertiary u-margin-bottom-small">Name 1</h3>
                <p class="feature-box__text">Position 1</p>
                <p class="feature-box__text">Contact</p>
                <p class="feature-box__text">Email</p>
              </div>
              <br /><br />
            </div> -->
          </div>
        </div>
      </section>
    </main>
    <footer class="footer">
      <div class="footer__logo-box">
        <img
          src="img-tech/logoWhiteCivilpngclored.png"
          alt="Full logo"
          class="footer__logo"
        />
      </div>

      <div class="footer__navigation">
        <ul class="footer__list">
          <li class="footer__item">
            <a href="https://www.facebook.com/ces.nitsurat/" class="footer__link"
              ><i class="fab fa-facebook-f footerIcons"></i
            ></a>
          </li>
          <li class="footer__item">
            <a href="#" class="footer__link"
              ><i class="fab fa-twitter footerIcons"></i
            ></a>
          </li>
          <li class="footer__item">
            <a href="https://instagram.com/ces.svnit" class="footer__link"
              ><i class="fab fa-instagram footerIcons"></i
            ></a>
          </li>
          
          
        </ul>
      </div>
    </footer>
    <!--
        <div class="popup" id="popup">
            <div class="popup__content">
                <div class="popup__left">
                    <img src="img/nat-8.jpg" alt="Tour photo" class="popup__img">
                    
                </div>
                <div class="popup__right">
                    <img src="img/nat-9.jpg" alt="Tour photo" class="popup__img">
                </div>
            </div>
        </div>
-->
    <!--
        <section class="grid-test">
            <div class="row">
                <div class="col-1-of-2">
                    Col 1 of 2
                </div>
                <div class="col-1-of-2">
                    Col 1 of 2
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    Col 1 of 3
                </div>
                <div class="col-2-of-3">
                    Col 2 of 3
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-2-of-4">
                    Col 2 of 4
                </div>
            </div>

            <div class="row">
                <div class="col-1-of-4">
                    Col 1 of 4
                </div>
                <div class="col-3-of-4">
                    Col 3 of 4
                </div>
            </div>
        </section>
        -->
        <script>
          const changeDisp = (e) => {
            document.querySelector('.navigation__checkbox').style.display = 'none';
          };
          
        </script>
  </body>
</html>
