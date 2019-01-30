<main>
              <div class="f-jumbotron">

              </div>
              <section class="contact-card">
                <div class="contact-card__content">
                    <div class="contact-card__content-img">
                    </div>
                    <div class="contact-card__content-form">
                        <form action="">
                          <div class="group">      
                              <input type="text" required>
                              <span class="highlight"></span>
                              <span class="bar"></span>
                              <label><?php echo $contactName?></label>
                          </div>
                          <div class="group">      
                              <input type="number" required>
                              <span class="highlight"></span>
                              <span class="bar"></span>
                              <label><?php echo $contactPhone?></label>
                          </div>
                          <div class="group">      
                              <input type="email" required>
                              <span class="highlight"></span>
                              <span class="bar"></span>
                              <label><?php echo $contactEmail?></label>
                          </div>
                          <div class="group">      
                              <textarea rows="1"></textarea>
                              <span class="highlight"></span>
                              <span class="bar"></span>
                              <label><?php echo $contactMsg?></label>
                          </div>

                          <input class="btn btn--default" type="submit" value="<?php echo $contactSubmit?>" name="submitmessage">
                        </form>
                        <?php
                          if(isset($_POST["submitmessage"])){
                              $to="info@qtag.ca";
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
                </div>
              </section>
              
          </main>