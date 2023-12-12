<?php get_header(); ?>


<!------------------MAIN----------------->
    <main>
      <section class="presentation">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-12 grossesse">
              <h1>La grossesse est une aventure. <br>Commencez la vôtre ici !</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="formulaire">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-5 offset-md-1">
              <p>Optimisez votre expérience en remplissant notre formulaire ! Recevez des conseil personnalisés et des ressources exclusives pour vivre pleinement chaque étape de ce merveilleux voyage.</p>
            </div>
            <div class="offset-md-1 col-md-4">
              <div class="button-container">
                <a href="#" class="btnprimaire">remplir le formulaire</a><br>
                <a href="#" class="btnsecondaire">Se connecter</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- <section class="fruits">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-10 offset-md-1 my-5">
              <h2>Les stades de la grossesse</h2>
              <img src="assets\img\pttpois.svg" alt="petits pois">
              <img src="assets\img\framboise.svg" alt="framboise">
              <img src="assets\img\kiwi.svg" alt="kiwi">
              <img src="assets/img/poire.svg" alt="poire">
              <img src="assets\img\artichaud.svg" alt="artichaud">
              <img src="assets\img\orange.svg" alt="orange">
              <img src="assets\img\chouxfleur.svg" alt="choux fleur">
              <img src="assets\img\coco.svg" alt="noix de coco">
              <img src="assets\img\citrouille.svg" alt="citrouille">
              <a href="#" class="btnprimaire">En savoir plus</a>
            </div>
          </div>
        </div>
      </section> -->
    <section class="fruits">
      <div class="container py-3">
        <div class="row">
          <div class="col-md mb-3 d-flex">
            <div class="images js-images">        
              <img data-index="step-1" class="active" src="assets\img\pttpois.svg" alt="petits pois">
              <img data-index="step-2" src="assets\img\framboise.svg" alt="framboise">
              <img data-index="step-3" src="assets\img\kiwi.svg" alt="kiwi">
              <img data-index="step-4" src="assets/img/poire.svg" alt="poire">
              <img data-index="step-5" src="assets\img\artichaud.svg" alt="artichaud">
              <img data-index="step-6" src="assets\img\orange.svg" alt="orange">
              <img data-index="step-7" src="assets\img\chouxfleur.svg" alt="choux fleur">
              <img data-index="step-8" src="assets\img\coco.svg" alt="noix de coco">
              <img data-index="step-9" src="assets\img\ananas.svg" alt="Ananas">
              <img data-index="step-10" src="assets\img\citrouille.svg" alt="citrouille">
            </div>
          </div>
          <div class="col-md-7">
            <div class="text js-text">

                    <?php if (have_posts()): ?>
                      <h1>Mes articles</h1>
                              <!-- C'est ici qu'on pourra afficher nos articles -->
                          <?php else: ?>
                      <h1>Aucun articles disponible pour le moment</h1>
                          <?php endif; ?>
                          
                          
              <article class="active" data-index="step-1">
                <h3>Petits pois</h3>
                <p>
                  4 semaines : petit pois
                  Le blastocyste s'implante dans l'utérus.
                  Poids : Environ 0,004 gramme (4 milligrammes).
                  Taille : Environ 0,1 mm.
                </p>
              </article>
              <article data-index="step-2">
                <h3>Framboise</h3>
                <p>
                  8 semaines : framboise 
                  On considère généralement que la grossesse commence à partir de la semaine de retard des règles.
                  Poids : Environ 1 gramme.
                  Taille : Environ 1,6 cm.
                </p>
              </article>
              <article data-index="step-3">
                <h3>Kiwi</h3>
                <p>
                  12 semaines : kiwi
                  Fin du premier trimestre.
                  Poids : Environ 14 grammes.
                  Taille : Environ 6,3 cm.
                </p>
              </article>
              <article data-index="step-4">
                <h3>Poire</h3>
                <p>
                  16 semaines : poire
                  Poids : Environ 100 à 150 grammes.
                  Taille : Environ 11 à 12,7 cm
                  Le fœtus a généralement développé des traits faciaux distincts, des doigts et des orteils, et il commence à bouger activement.
                </p>
              </article>
              <article data-index="step-5">
                <h3>artichaud</h3>
                <p>
                  20 semaines : artichaud
                  Mi-grossesse.
                  Poids : Environ 300 grammes.
                  Taille : Environ 16 cm.
                </p>
              </article>
              <article data-index="step-6">
                <h3>Orange</h3>
                <p>
                  24 semaines : orange
                  Poids : Environ 600 à 700 grammes.
                  Taille : Environ 30 cm.
                  Les organes vitaux continuent de se développer, les poumons atteignent un stade où la survie en dehors de l'utérus est envisageable, bien que la prématurité reste un défi important à ce stade.
                </p>
              </article>
              <article data-index="step-7">
                <h3>Choux-fleur</h3>
                <p>
                  28 semaines : choux fleur 
                  Début du troisième trimestre.
                  Poids : Environ 1 kg.
                  Taille : Environ 35,6 cm.
                </p>
              </article>
              <article data-index="step-8">
                <h3>Noix de coco</h3>
                <p>
                  32 semaines : noix de coco
                  le fœtus se prépare aux fonctions respiratoires et continue de prendre du poids
                  Poids : Environ 1,8 kg.
                  Taille : Environ 42 cm.
                </p>
              </article>
              <article data-index="step-9">
                <h3>Ananas</h3>
                <p>
                  36 semaines : ananas
                  il adopte généralement une position en vue de l'accouchement
                  Poids : Environ 2,6 kg.
                  Taille : Environ 47 cm.
                </p>
              </article>
              <article data-index="step-10">
                <h3>Citrouille</h3>
                <p>
                  40 semaines (à terme) : citrouille 
                  il est prêt pour l'accouchement, démontrant des réflexes développés et un système immunitaire renforcé.
                  Poids moyen à la naissance : Environ 3,4 kg.
                  Taille moyenne à la naissance : Environ 50 cm.
                </p>
              </article>
              </div>
            <ul class="flex-column nav nav-pills links js-links">
              <li class="nav-item"><a class="nav-link active" data-index="step-1" href="#">4 sem.</a></li>
              <li class="nav-item"><a class="nav-link" data-index="step-2" href="#">8 sem.</a></li>
              <li class="nav-item"><a class="nav-link" data-index="step-3" href="#">12 sem.</a></li>
              <li class="nav-item"><a class="nav-link" data-index="step-4" href="#">16 sem.</a></li>
              <li class="nav-item"><a class="nav-link" data-index="step-5" href="#">20 sem.</a></li>
              <li class="nav-item"><a class="nav-link" data-index="step-6" href="#">24 sem.</a></li>
              <li class="nav-item"><a class="nav-link" data-index="step-7" href="#">28 sem.</a></li>
              <li class="nav-item"><a class="nav-link" data-index="step-8" href="#">32 sem.</a></li>
              <li class="nav-item"><a class="nav-link" data-index="step-9" href="#">36 sem.</a></li>
              <li class="nav-item"><a class="nav-link" data-index="step-10" href="#">40 sem.</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

      <section>
        <div class="container text-center">
          <div class="row">
            <div class="col-md-6 roleparents">
              <h3>Les parents jouent un rôle essentiel pendant la grossesse en s’offrant un soutien émotionnel l’un l’autre.</h3><br><br><br><br>
              <p>En adoptant des <strong>modes de vie sains </strong>pour favoriser la santé maternelle et fœtale, et en participant activement à 
                la préparation <strong>physique</strong> et <strong>émotionnelle</strong> de l'arrivée du bébé. </p><br><br>
              <p>La communication ouverte et la collaboration renforcent le lien familial dès les premiers stades du développement du fœtus.</p>
            </div>
            <div class="col-md-6">
              <div class="symbolespapamaman">
                <img src="assets\img\femmehomme.svg" alt="Symbole maman et papa">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="newsletter">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-6 offset-md-3 my-5">
              <p>Inscrivez-vous à notre newsletter afin de recevoir<br> nos conseils par e-mail !</p>
              <a href="#" class="btnprimaire">S'inscrire à la newsletter</a>
            </div>
          </div>
        </div>
      </section>
    </main>


<!------------------FOOTER----------------->
  
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="footer-col">
              <a class="d-inline-flex align-items-center mb-2 text-body-emphasis" href="/" >
                <img class="logo" src="assets/img/logo.svg" alt="logo FetUs">
              </a>
            </div>

            <div class="footer-col">
              <h4>Général</h4>
              <ul>
                <li><a href="#">Tout savoir sur la grossesse</a></li>
                <li><a href="#">Conseils</a></li>
                <li><a href="#">Mon suivi</a></li>
                <li><a href="#">Mes objectifs</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Outils</h4>
              <ul>
                <li><a href="#">Mentions légales</a></li>
                <li><a href="#">Cookies</a></li>
                <li><a href="#">Se connecter</a></li>
                <li><a href="#">S'enregistrer</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Suivez-nous</h4>
              <div class="social-links">
                <a href="#"><img src="assets/img/x.svg" alt="X"></a>
                <a href="#"><img src="assets/img/youtube.svg" alt="youtube"></i></a>
                <a href="#"><img src="assets/img/instagram.svg" alt="instagram"></a>
                <a href="#"><img src="assets/img/facebook.svg" alt="facebook"></a>
              </div>
            </div>
          </div>
        </div>
     </footer>
   
  

<?php get_footer(); ?>