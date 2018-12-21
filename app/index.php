<?php
require 'lang/lang.php';
require 'lang/choselang.php';
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>qTag</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">

  </head>
  <body>
        <nav class="nav" id="nav">
          <div class="container">
            <div class="row justify-content-between align-items-center">
              <div class="nav__logo">
                <a href="index.html">
                  <img src="assets/img/qtag.svg" alt="LOGO" width="25%">
                </a>
              </div>
              <div class="nav__buttons justify-content-around align-items-center d-none d-lg-flex">
                  <ul class="nav__list mr-5">
                    <li class="nav__list-item">
                      <!-- <a href="#nav" class="nav__list-link"></*?php echo $home;?></a> -->
                      <a href="#nav" class="nav__list-link">Home</a>
                    </li>
                    <li class="nav__list-item">
                        <a href="#features" class="nav__list-link">Features</a>
                    </li>
                    <li class="nav__list-item">
                        <a href="#" class="nav__list-link">Pricing</a>
                    </li>
                    <li class="nav__list-item">
                        <a href="#products" class="nav__list-link">Products</a>
                    </li>
                  </ul>
                  <div class="nav__cta d-flex align-items-center">
                    <a href="#" class="btn btn--transparent">Registration</a>
                    <a href="#" class="btn btn--default">Connect Now</a>
                    <div class="nav__cta-lang"> 
                      <select class="select" id="lang_header">
                        <option value="fr"> FR</option>
                        <option value="en"> EN</option>
                      </select>
                    </div>

                  </div>
              </div>
            </div>
          </div>
        </nav>

        <div class="navigation d-md-block d-lg-none">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
            <label for="navi-toggle" class="navigation__button ">
                <span class="navigation__icon">&nbsp;</span>
            </label>
            
            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item">
                        <a href="#" class="navigation__link">Home</a>
                    </li>

                    <li class="navigation__item">
                        <a href="#" class="navigation__link"> Features</a>
                    </li>

                    <li class="navigation__item">
                        <a href="#" class="navigation__link">Pricing</a>
                    </li>

                    <li class="navigation__item">
                        <a href="#" class="navigation__link">Contact </a>
                    </li>
                    <li class="navigation__item">
                        <a href="#" class="navigation__link">Get App</a>
                    </li>
                </ul>
            </nav>
        </div>
 
        <div class="m-jumbotron">
            <div class="row">
              <div class="col-lg-6 col-md-6 px-5">
                <h1 class="heading heading--primary">Increase your profits and you efficiency</h1>
                <p class="m-jumbotron__text">La plateforme Q-Tag propose aux concessionnaires un moyen.</p>
                <p class="m-jumbotron__text">Rapide et efficace pour le suivi d’inventaire qui permet d’accéder, entre autre, aux informations.</p>
                <p class="m-jumbotron__text">Concernant le statut des véhicules, à l’état des préparatifs de leurs mises en marché physique.</p>
                <div class="m-jumbotron__cta">
                  <a href="#features" class="btn btn--default">Try Now</a>
                </div>
              </div>
              <div class="d-none d-md-flex col-lg-6 col-md-6 align-items-center ">
                <div class="m-jumbotron__image">
                  <img src="./assets/img/pc.png" alt="">
                </div>
              </div>
            </div>
          </div>
      <main>
        <section id="features" class="features">
          <div class="features--header">
            <h1 class="heading heading--secondary heading--center">Slogan Here about <br> Q-Tag</h1>
          </div>
          <div class="features__cards-container">
            <div class="feature--card">
                <div class="feature--card__icon">
                  <img src="assets/img//brush.svg" alt="" width="80%">
                </div>
                <p class="feature--card__title">Modern Flat Design</p>
                <p class="feature--card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum alias illum dignissimos amet a dolore!</p>
            </div>
            <div class="feature--card">
                <div class="feature--card__icon">
                    <img src="assets/img/cart.svg" alt="" width="80%">
                </div>
                <p class="feature--card__title">First 7 Days Free</p>
                <p class="feature--card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum alias illum dignissimos amet a dolore!</p>
            </div>
            <div class="feature--card">
                <div class="feature--card__icon">
                  <img src="assets/img/message.svg" alt="" width="80%">
                </div>
                <p class="feature--card__title">Full Support</p>
                <p class="feature--card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum alias illum dignissimos amet a dolore!</p>
            </div>
            <div class="feature--card">
                <div class="feature--card__icon">
                    <img src="assets/img/phone.svg" alt="" width="80%">
                  </div>
                <p class="feature--card__title">User Friendly</p>
                <p class="feature--card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum alias illum dignissimos amet a dolore!</p>
            </div>
           
          </div>

        </section>
        <section id="products" class="products">
          <div class="row">
            <div class="col-lg-5 col-md-5">
                <div id="productCarrousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/img/image-2.png" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/IMAGE1.png" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/IMAGE1.png" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#productCarrousel" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#productCarrousel" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="products__upper">
                  <h1 class="heading heading--secondary">Our Products</h1>
                  <p class="products__upper-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ratione fuga deserunt iste architecto earum explicabo ipsum rerum molestias numquam? Doloremque temporibus maxime libero illum? Enim debitis, ducimus praesentium corrupti quis saepe perferendis reiciendis ab fuga suscipit dolores, ullam fugit eveniet eum, animi mollitia sit neque architecto? Deserunt, placeat tempore?
                  </p>
                  <a href="#" class="btn btn--default">More Informations</a>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="products__down">
                    <h1 class="heading heading--secondary">Our Products</h1>
                    <p class="products__down-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ratione fuga deserunt iste architecto earum explicabo ipsum rerum molestias numquam? Doloremque temporibus maxime libero illum? Enim debitis, ducimus praesentium corrupti quis saepe perferendis reiciendis ab fuga suscipit dolores.
                    </p>
                    <a href="#" class="btn btn--default">More Informations</a>
                </div>
            </div>
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-5 col-md-5">
                <div id="productCarrousel2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/img/image-2.png" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/IMAGE1.png" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/IMAGE1.png" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#productCarrousel" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#productCarrousel2" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
          </div>
        </section>
        <section id="gains" class="gains">
          <div class="gains__container d-flex">
              <div class="col-md-4 d-none d-md-block">
                <img src="assets/img/phone.png" width="75%">
              </div>
              <div class="col-md-4 d-flex flex-column
              align-items-center">
                  <div class="gains--card">
                    <div class="gains--card__header d-flex align-items-end">
                        <div class="gains--card__header-icon">
                            <i class="ico-heart"></i>
                          </div>
                          <div class="gains--card__header-title">
                              <p class="gains--card__header-title-text">Time Savings</p>
                          </div>  
                    </div>
                    <div class="gains--card__text">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, error.
                    </div>
                  </div>
                  <div class="gains--card">
                      <div class="gains--card__header d-flex align-items-end">
                          <div class="gains--card__header-icon">
                              <i class="ico-tag"></i>
                            </div>
                            <div class="gains--card__header-title">
                                <p class="gains--card__header-title-text">Time Savings</p>
                            </div>  
                      </div>
                      <div class="gains--card__text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, error.
                      </div>
                  </div>
                  <div class="gains--card">
                      <div class="gains--card__header d-flex align-items-end">
                          <div class="gains--card__header-icon">
                              <i class="ico-pencil"></i>
                            </div>
                            <div class="gains--card__header-title">
                                <p class="gains--card__header-title-text">Time Savings</p>
                            </div>  
                      </div>
                      <div class="gains--card__text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, error.
                      </div>
                  </div>
                  <div class="gains--card">
                      <div class="gains--card__header d-flex align-items-end">
                          <div class="gains--card__header-icon">
                              <i class="ico-case"></i>
                            </div>
                            <div class="gains--card__header-title">
                                <p class="gains--card__header-title-text">Time Savings</p>
                            </div>  
                      </div>
                      <div class="gains--card__text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, error.
                      </div>
                  </div>
              </div>
          </div>
 
        </section>
        <section id="accelerate" class="accelerate">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="accelerate__left">
                  <h1 class="heading heading--secondary heading--right">Accelerate your management by 
                      minimizing the use of papers</h1>
                  <ul class="accelerate__left-list">
                    <li class="accelerate__left-list-item"><i class="ico-tick"></i> Easy to use</li>
                    <li class="accelerate__left-list-item"><i class="ico-tick"></i>Best products</li>
                  </ul>

                  <p class="accelerate__left-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ratione fuga deserunt iste architecto earum explicabo ipsum rerum molestias numquam? Doloremque temporibus maxime libero illum? Enim debitis, ducimus praesentium corrupti quis saepe perferendis reiciendis ab fuga suscipit dolores.
                  </p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 d-none d-md-flex align-items-end">
                
              <div class="accelerate__right">
                <img src="assets/img/set.png" alt="Charts" width="90%">
              </div>
            </div>
          </div>
        </section>
        <section id="video">
            <video title="Play Video" id="player" playsinline controls>
              <source src="./assets/video/Sample.mp4" type="video/mp4">        
      
          </video>
        </section>
        <section id="testimonial" class="testimonial">
            <div class="testimonial__header">
                <h1 class="heading heading--secondary heading--center">Join Thousands of satisfied users</h1>
            </div>
            <div class="testimonial__card-container">
                  <div class="testimonial--card">
                      <div class="testimonial--card__image">
                          <img src="assets/img/p1.jpg" alt="Person">
                      </div>
                      <div class="testimonial--card__quote">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae, possimus.</p>
                      </div>
                      <div class="testimonial--card__person">
                          <p class="testimonial--card__person-name">Jane Doe</p>
                          <p class="testimonial--card__person-position">CEO</p>
                      </div>
                    </div>
                  <div class="testimonial--card">
                      <div class="testimonial--card__image">
                          <img src="assets/img/p2.jpg" alt="Person">
                      </div>
                      <div class="testimonial--card__quote">
                          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad, delectus.</p>
                      </div>
                      <div class="testimonial--card__person">
                          <p class="testimonial--card__person-name">Jane Doe</p>
                          <p class="testimonial--card__person-position">CEO</p>
                      </div>
                    </div>
                  <div class="testimonial--card">
                      <div class="testimonial--card__image">
                        <img src="assets/img/p3.jpg" alt="Person">
                      </div>
                      <div class="testimonial--card__quote">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, laborum!</p>
                      </div>
                      <div class="testimonial--card__person">
                        <p class="testimonial--card__person-name">Jane Doe</p>
                        <p class="testimonial--card__person-position">CEO</p>
                      </div>
                    </div>
            </div>
        </section>
        <section id="reviews" class="reviews">
          <div class="reviews__header">
              <h1 class="heading heading--primary heading--center">Reviews</h1>
          </div>
              <form class="row">
                <div class="col-md-6">
                    <div class="group">      
                        <input type="text" name="company" id="review-company" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Name of Company</label>
                    </div>
                    <div class="group">      
                        <input type="text" name="email" id="review-email" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>E-mail here</label>
                    </div>
                    <div class="group">      
                        <input type="number" name="phone" id="review-phone" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Phone number</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="group">      
                        <input type="number" id="rate" required disabled>
                        <div class="rating-widget">
                            <div class='rating-stars text-center'>
                                <ul id='stars'>
                                  <li class='star' data-value='1'>
                                    <i class='ico-star'></i>
                                  </li>
                                  <li class='star' data-value='2'>
                                    <i class='ico-star'></i>
                                  </li>
                                  <li class='star' data-value='3'>
                                    <i class='ico-star'></i>
                                  </li>
                                  <li class='star' data-value='4'>
                                    <i class='ico-star'></i>
                                  </li>
                                  <li class='star' data-value='5'>
                                    <i class='ico-star'></i>
                                  </li>
                                </ul>
                              </div>
                        </div>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Rate Us</label>
                    </div>   
                    <div class="group">      
                        <input type="text" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Your review here</label>
                    </div>
                      <input class="btn btn--default" id="review-btn" type="submit" name="submitreview" value="Send reviews">
                </div>
              </form>            
              <?php
              if(isset($_POST["submitreview"])){
                dump("HERE");
                $to="med.khalil.sghaier@gmail.com";
                $email=htmlspecialchars($_POST["email"]);
                $phone=htmlspecialchars ($_POST["phone"]);
                $company=htmlspecialchars ($_POST["company"]);
                $review=htmlspecialchars($_POST["review"]);
                $rate=htmlspecialchars($_POST["number"]);
                $subject = 'Review from '.$email;
                $message = 'Rate: '.$rate.'/5'.'\n'.$review.'\n'.'company: '.$company.'\n'.'Phone: '.$phone;
                $headers = array(
                    'From' => $email,
                    'X-Mailer' => 'PHP/' . phpversion()
                );
                if(mail($to, $subject, $message, $headers)) {
                  echo "envoyé avec succé";
                }
                else {
                  echo "echec";
                }
              }
              ?>
        </section>
        <section id="soon" class="soon">
          <div class="row">
            <div class="col-md-6 d-none d-md-block">
              <div class="img__container">
                <img src="assets/img/phones.png" alt="Phones" width="70%">
              </div>
            </div>
            <div class="col-md-6">
              <div class="availability">
                  <div class="availability__header">
                      <h1 class="heading heading--secondary">Available Soon</h1>
                  </div>
                  <div class="availability__text">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor, nulla dicta? Tenetur unde facere possimus exercitationem doloremque magnam ipsa earum.</p>
                  </div>
                  <div class="availability__btns">
                    <a href="#" class="mr-5">
                      <img src="assets/img/PlayStore-Btn.png" alt="">
                    </a>
                    <a href="#">
                      <img src="assets/img/iStore-Btn.png" alt="">
                    </a>
                  </div>
              </div>
            </div>
            <div class="soon__cta">
              <a href="#" class="btn btn--default">Register and Get the App Now</a>
            </div>
          </div>
        </section>
        <section id="contact" class="contact">
          <div class="contact__form">
            <p class="contact__form-title">Get in touch</p>
            <p class="contact__form-subtile">Call or Email us regarding questions or issues</p>
            <form>
                <div class="group">      
                    <input type="text" name="name" id="contact-name" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Name</label>
                </div>
                <div class="group">      
                    <input type="number" name="phone" id="contact-phone" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Phone N°</label>
                </div>
                <div class="group">      
                    <input type="email" name="email" id="contact-email" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Email</label>
                </div>
                <div class="group">      
                    <textarea name="message" id="contact-message"></textarea>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Message</label>
                </div>

                <input class="btn btn--default" id="contact-btn" type="submit" value="Send message" name="submitmessage">
            </form>
            <?php
            if(isset($_POST["submitmessage"])){
                $to="me@test.com";
                $name=htmlspecialchars($_POST["name"]);
                $email=htmlspecialchars($_POST["email"]);
                $phone=htmlspecialchars ($_POST["phone"]);
                $message=htmlspecialchars($_POST["message"]);
                $subject = 'Message '.$email;
                $message = 'Name: '.$name.'\n'.'Message'.$message.'\n'.'Phone: '.$phone;
                $headers = array(
                    'From' => $email,
                    'X-Mailer' => 'PHP/' . phpversion()
                );
              if(mail($to, $subject, $message, $headers)) {
                echo "envoyé avec succé";
              }
              else {
                echo "echec";
              }
              }
              ?>
          </div>
          <div class="contact__img d-none d-md-block">
            <img src="assets/img/set.png" width="100%">
          </div>
        </section>
      </main>

      <footer class="footer"> 
        <div class="footer__rights">
          <span>© 2018 - All Right Reserved</span>
        </div>
        <div class="footer__number">
          <span>+880 1843 123 123</span>
        </div>
        <div class="footer__email">
          <span>yourname@gmail.com</span>
        </div>
        <div class="footer__address">
          <span>350 5th Ave</span>
          <span>Floor 54</span>
          <span>New York, NY, 10118</span>
        </div>
        <div class="footer__icons">
          <span><a href="#"><i class="ico-facebook"></i></a></span>
          <span><a href="#"><i class="ico-twitter"></i></a></span>
          <span><a href="#"><i class="ico-google"></i></a></span>
          <span><a href="#"><i class="ico-youtube"></i></a></span>
        </div>
    </footer>
        
    <script src="assets/js/bundle.min.js"></script>
  </body>
</html>