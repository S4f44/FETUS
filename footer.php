<?php wp_footer(); ?>

<!------------------FOOTER----------------->
      
<footer class="footer">
                      <?php 
                      wp_nav_menu([
                      'theme_location' => 'footer', // localisation de mon menu
                      'container' => false, // permet de retirer mon container
                      'menu_class' => 'navbar-nav mx-auto' // la classe que je veux dans mon <ul></ul>
                      ]); 
                      ?>

            <div class="container">
              <div class="row">
                <div class="footer-col">
                  <a class="d-inline-flex align-items-center mb-2 text-body-emphasis" href="<?php echo get_template_directory_uri(); ?>/home" >
                    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo FetUs">
                  </a>
                </div>
    
                <div class="footer-col">
                  <h4>Général</h4>
                  <ul>
                    <li><a href="<?php echo home_url('/toutsavoir'); ?>">Tout savoir sur la grossesse</a></li>
                    <li><a href="<?php echo home_url('/conseils'); ?>">Conseils</a></li>
                    <li><a href="<?php echo home_url('/monsuivi'); ?>">Mon suivi</a></li>
                    <li><a href="<?php echo home_url('/mesobjectifs'); ?>">Mes objectifs</a></li>
                  </ul>
                </div>
                <div class="footer-col">
                  <h4>Outils</h4>
                  <ul>
                    <li><a href="<?php echo home_url('/mentionslegales'); ?>">Mentions légales</a></li>
                    <li><a href="<?php echo home_url('/cookies'); ?>">Cookies</a></li>
                    <!-- <li><a href="<?php //echo get_template_directory_uri(); ?>/connexion">Se connecter</a></li> -->
                    <li><a href="<?php echo home_url('/connexion'); ?>">Se connecter</a></li>
                    <!-- <li><a href="<?php //echo get_template_directory_uri(); ?>/enregistrer">S'enregistrer</a></li> -->
                    <li><a href="<?php echo home_url('/enregistrer'); ?>">S'enregistrer</a></li>
                  </ul>
                </div>
                <div class="footer-col">
                  <h4>Suivez-nous</h4>
                  <div class="social-links">
                    <a href="404.php"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/x.svg" alt="X"></a>
                    <a href="404.php"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube.svg" alt="youtube"></i></a>
                    <a href="404.php"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt="instagram"></a>
                    <a href="404.php"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="facebook"></a>
                  </div>
                </div>
                <div class="container text-center">
                  <div class="row">
                    <div class="col-md-4 offset-md-8">
                      <p>© FetUs, tous les droits réservés</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
         </footer>       
      
    
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/monjs.js"></script>
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/0c7fbbc17852193887d1d1b14/7e6b8fb1f89fd0984c2290964.js");</script>
</body>
</html>