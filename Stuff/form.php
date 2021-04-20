<?php
echo "<pre>";
     print_r($_POST);
echo '</pre>';

     $message_sent = true;
     if(isset($_POST['Email']) && $_POST['Email'] != ' '){
          
          if(filter_var($_POST['Name'], FILTER_VALIDATE_EMAIL) ) {
                
               //submit the form
               $Name = $_POST['Name'];
               $Email = $_POST['Email'];
               $Message = $_POST['Message'];
               $Subject = $_POST['Subject'];

               $to = "rlaehgus245245@gmail.com";
               $body = "";
               $body .= "From: ".$Name. "\r\n";
               $body .= "Email: ".$Email. "\r\n";
               $body .= "Message: ".$Message. "\r\n";

               mail($to, $Subject, $body); 

               $message_sent = true;
          }//end if
          else {
               $invalid_class_name = "form-invalid";
          }
     }//end if
     
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="Stuff/css/style.css">


  <!-- =====Box Icons====-->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <title>Kevin's personal website</title>
</head>

<body>
  <!--===== HEADER =====-->
  <header class="l-header">
    <nav class="nav bd-grid">
      <div>
        <a href="#" class="nav__logo">Kevin Kim</a>
      </div>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item"><a href="#home" class="nav__link">Home</a></li>
          <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
          <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
          <li class="nav__item"><a href="#work" class="nav__link">Projects</a></li>
          <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
        </ul>
      </div>

      <div class="nav__toggle" id="nav-toggle">
        <i class='bx bx-menu'></i>
      </div>
    </nav>
  </header>
  <main class="l-main">
    <!--==== HOME ====-->
    <section class="home bd-grid" id="home">
      <div class="home__data">
        <h1 class="home__title">Hi, <br>I'm <span class="home__title-color">Kevin,</span><br> Highschool Student</h1>
        <a href="#contact" class="button">Contact Me</a>
      </div>
      <div class="home-social">
      </div>

      <div class="home__img">
        <img src="Stuff/Image/hacker.jpg" class="home__img">
      </div>
    </section>

    <!--==== ABOUT ====-->
    <section class="about section" id="about">
      <h2 class="section-title">About Me</h2>

      <div class="about__container bd-grid">
        <div class="about__img">
          <img src="Stuff/Image/work7.jpg" alt="" class="about__img">
        </div>

        <div>
          <h2 class="about__subtitle">I am Kevin</h2>
          <p>I am currently a highschool student in Ontario, Canada. When I first
            came across web development, I instantly fell in love with it. Although, I don't
            have any expereince in the field, I am really excited to work as a software engineer in the future. </p>
        </div>
      </div>
    </section>

    <!--==== SKILLS =====-->
    <section class="skills section" id="skills">
      <h2 class="section-title">Skills</h2>

      <div class="skills__container bd-grid">
        <div>
          <h2 class="skills__subtitle">Proficient</h2>
          <div class="skills__data">
            <div class="skills__names">
              <i class='bx bxs-coffee skills__icon'></i>
              <span class="skills__name">Java</span>
            </div>

            <div>
              <span class="skills__percentage">85%</span>
            </div>

            <div class="skills__bar skills__java"></div>
          </div>

          <div class="skills__data">
            <div class="skills__names">
              <i class='bx bxl-html5 skills__icon'></i>
              <span class="skills__name">HTML5</span>
            </div>

            <div>
              <span class="skills__percentage">70%</span>
            </div>

            <div class="skills__bar skills__html"></div>
          </div>

          <div class="skills__data">
            <div class="skills__names">
              <i class='bx bxl-css3 skills__icon'></i>
              <span class="skills__name">CSS3</span>
            </div>

            <div>
              <span class="skills__percentage">70%</span>
            </div>

            <div class="skills__bar skills__css"></div>
          </div>
          <div class="skills__data">
            <div class="skills__names">
              <i class='bx bxl-javascript skills__icon'></i>
              <span class="skills__name">JavaScript</span>
            </div>

            <div>
              <span class="skills__percentage">60%</span>
            </div>

            <div class="skills__bar skills__js"></div>
          </div>
          <div>
            <h2 class="skills__subtitle">Exposed</h2>
            <div class="skills__data">
              <div class="skills__names">
                <i class='bx bxs-coin-stack skills__icon'></i>
                <span class="skills__name">SQL</span>
              </div>

              <div>
                <span class="skills__percentage">30%</span>
              </div>
              <div class="skills__bar skills__SQL"></div>
            </div>

            <div class="skills__data">
              <div class="skills__names">
                <i class='bx bxl-python skills__icon'></i>
                <span class="skills__name">Python</span>
              </div>

              <div>
                <span class="skills__percentage">7%</span>
              </div>

              <div class="skills__bar skills__python"></div>
            </div>
            <div class="skills__data">
              <div class="skills__names">
                <i class='bx bxl-c-plus-plus skills__icon'></i>
                <span class="skills__name">C++</span>
              </div>

              <div>
                <span class="skills__percentage">7%</span>
              </div>

              <div class="skills__bar skills__cplus"></div>
            </div>
          </div>
        </div>
        <div>
          <img src="Stuff/Image/coding wallpaper.jpg" alt="" class="skills__img">
        </div>
      </div>
    </section>

    <!--==== PROJECTS ====-->
    <section class="work section" id="work">
      <h2 class="section-title">Projects</h2>

      <div class="work__container bd-grid">
        <div class="work__img">
          <img src="Stuff/Image/cloude binary.png" alt="">
        </div>
        <div class="work__img">
          <img src="Stuff/Image/rocket1.png" alt="">
        </div>
        <div class="work__img">
          <img src="Stuff/Image/cop.jpg" alt="">
        </div>
      </div>
    </section>

    <!--==== CONTACT ====-->
   
      <section class="contact section" id="contact">
        <h1 class="section-title">Contact</h1>

        <?php
        if($message_sent):
        ?>
          <div id="contact__status" class="success">You had successfully sent the email!</div>
        <?php
        else:
        ?>
          <div class="contact__container bd-grid">
          <form action="contactform.php" method="POST"class="contact__form">
            <input <?=$invalid_class_nametype ?? ""?> type="text" name ="Name" placeholder="Name" class="contact__input" required>
            <input type="mail" name="Email" placeholder="Email" class="contact__input" required>
            <input type="Sub" name="Subject" placeholder="Subject" class="contact__input">
            <textarea name="Message" placeholder="Text goes here!" cols="0" rows="11" class="contact__input"></textarea>

            <button type="submit" class="contact__button button">Send</button>
          </form>
        </div>
      </section>
      <?php
      endif;
      ?>
  </main>

  <!--===== FOOTER =====-->
  <footer class="footer">
    <p class="footer__title">Kevin Kim</p>
    <div class="footer__social">
      <a href="https://www.instagram.com/kev._.xn/" target="_blank" class="footer__icon"><i
          class='bx bxl-instagram-alt'></i></a>
      <a href="https://www.facebook.com/profile.php?id=100014833001916" target="_blank" class="footer__icon"><i
          class='bx bxl-facebook-circle'></i></a>
      <a href="https://twitter.com/Kevin74523768" target="_blank" class="footer__icon"><i
          class='bx bxl-twitter'></i></a>
      <a href="https://github.com/kevink1236" target="_blank" class="footer__icon"><i class='bx bxl-github'></i></a>
    </div>
    <p>&#169; 2021 copyright all right reserved</p>
    <div class="footer__social">
    </div>
  </footer>

  <!--===== SCROLL REVEAL =====-->
  <script src="https://unpkg.com/scrollreveal"></script>

  <!--===== MAIN JS=====-->
  <script src="Stuff/js/main.js">
  </script>
</body>

</html>
