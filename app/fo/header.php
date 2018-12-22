<nav class="nav" id="nav">
          <div class="container">
            <div class="row justify-content-between align-items-center">
              <div class="nav__logo">
                <a href="">
                  <img src="assets/img/qtag.svg" alt="LOGO" width="25%">
                </a>
              </div>
              <div class="nav__buttons justify-content-around align-items-center d-none d-lg-flex">
                  <ul class="nav__list mr-5">
                    <li class="nav__list-item">
                      <a href="./" class="nav__list-link"><?php echo $home ?></a>
                    </li>
                    <li class="nav__list-item">
                        <a href="./#features" class="nav__list-link"><?php echo $features ?></a>
                    </li>
                    <li class="nav__list-item">
                        <a href="./#products" class="nav__list-link"><?php echo $products ?></a>
                    </li>
                    <li class="nav__list-item">
                        <a href="?page=contact" class="nav__list-link"><?php echo $contact ?></a>
                    </li>
                  </ul>
                  <div class="nav__cta d-flex align-items-center">
                    <a href="#" class="btn btn--transparent"><?php echo $registration ?></a>
                    <a href="#" class="btn btn--default"><?php echo $connect ?></a>
                    <div class="nav__cta-lang">
                      <a href="?lang=en" style="color:white;" class="btn 
                      <?php if($trans=="lang/en.php") echo 'btn--default'; ?>
                      ">
                      EN
                    </a>
                    <a href="?lang=fr" style="color:white;" class="btn <?php if($trans=="lang/fr.php") echo 'btn--default'; ?>" >FR</a>
                    </div>
                   <!-- <form action="" method="POST">
                    <div class="nav__cta-lang"> 
                      <select class="select" name="lang" id="lang_header">
                        <option value="fr">FR</option>
                        <option value="en">EN</option>
                      </select>
                    </div>
                    </form>-->
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
                        <a href="./#nav" class="navigation__link"><?php echo $home ?></a>
                    </li>
                    <li class="navigation__item">
                        <a href="./#features" class="navigation__link"><?php echo $features ?></a>
                    </li>

                    <li class="navigation__item">
                        <a href="./#pricing" class="navigation__link"><?php echo $pricing ?></a>
                    </li>

                    <li class="navigation__item">
                        <a href="?page=contact" class="navigation__link"><?php echo $contact ?> </a>
                    </li>
                    <li class="navigation__item">
                        <a href="./#soon" class="navigation__link"><?php echo $getApp ?></a>
                    </li>
                </ul>
            </nav>
        </div>