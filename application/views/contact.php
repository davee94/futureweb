<?php
include('header.php');
?>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kapcsolat</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2665.311409576133!2d20.783484815171402!3d48.084932862805964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4740a020cbfa3d85%3A0x3b94f07d5bfe1227!2sMiskolc%2C%20Csabai%20kapu%2055%2C%203529!5e0!3m2!1shu!2shu!4v1593432751067!5m2!1shu!2shu" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Hely</h4>
                <p>3529 Miskolc, Csabai kapu 55</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email</h4>
                <p>info@futureweb.hu</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Hívjon</h4>
                <p>+36 70/397-3-297</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            

            <form action="welcome/sendcontactmail" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-4 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Név" data-rule="minlen:4" data-msg="Több, mint 4 karakter szükséges." />
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                  <input type="email" class="form-control" name="email" id="Email" placeholder="Email" data-rule="email" data-msg="Kérlek adj meg valós e-mail címet!" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                  <input autocomplete="tel" type="phone" class="form-control" name="phone" id="phone" placeholder="Telefonszám" data-rule="phone" data-msg="Kérlek adj meg valós telefonszámot!" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                
                <select class="form-control" name="subject" id="subject" style="font-size: 14px; height: 44px;">
                  <option selected value="erdeklodes">Érdeklődés</option>
                  <option value="ajanlat">Ajánlatkérés</option>
                  <option value="egyeb">Egyéb</option>
                </select>
                
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required minlen:10" data-msg="Írj nekünk valamit!" placeholder="Üzenet"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Töltés</div>
                <!--div class="error-message"></div>
                <div class="sent-message">Üzenetét elküldtük sikeresen!</div-->
              </div>
              <div class="text-center"><button type="submit">Küldés</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

<?php
include('footer.php');
?>
