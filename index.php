<?php get_header(); ?>


<!------------------MAIN----------------->
    <main>
      <section class="grossesse">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-12 ">
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
                <a href="<?php echo get_template_directory_uri(); ?>/enregistrer" class="btnprimaire">remplir le formulaire</a><br>
                <a href="<?php echo get_template_directory_uri(); ?>/connexion" class="btnsecondaire">Se connecter</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="fruits">
        <div class="container text-center py-3">
          <div class="row">
            <h2>Les différents stades de la grossesse</h2>
            <div class="col-md-4 offset-md-2">
              <div class="text js-text">
                <article class="active" data-index="step-1">
                  <h3>Petit pois</h3>
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
                  <h3>Chou-fleur</h3>
                  <p>
                    28 semaines : chou-fleur 
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
                    40 semaines (à terme) : citrouille <br>
                    Poids moyen à la naissance : Environ 3,4 kg.
                    Taille moyenne à la naissance : Environ 50 cm.
                    il est prêt pour l'accouchement, démontrant des réflexes développés et un système immunitaire renforcé.
                    
                  </p>
                </article>
              </div>
            </div>

            <div class="col-md-4 offset-md-1">
              <div class="images js-images">        
                <img data-index="step-1" class="active" src="<?php echo get_template_directory_uri() ?>/assets/img/pttpois.svg" alt="petit pois" class="grpttpois">
                <img data-index="step-2" src="<?php echo get_template_directory_uri() ?>/assets/img/framboise.svg" alt="framboise" class="grframboise">
                <img data-index="step-3" src="<?php echo get_template_directory_uri() ?>/assets/img/kiwi.svg" alt="kiwi" class="grkiwi">
                <img data-index="step-4" src="<?php echo get_template_directory_uri() ?>/assets/img/poire.svg" alt="poire" class="grpoire">
                <img data-index="step-5" src="<?php echo get_template_directory_uri() ?>/assets/img/artichaud.svg" alt="artichaud" class="grartichaud">
                <img data-index="step-6" src="<?php echo get_template_directory_uri() ?>/assets/img/orange.svg" alt="orange" class="grorange">
                <img data-index="step-7" src="<?php echo get_template_directory_uri() ?>/assets/img/chouxfleur.svg" alt="choux fleur" class="grchoufleur">
                <img data-index="step-8" src="<?php echo get_template_directory_uri() ?>/assets/img/coco.svg" alt="noix de coco" class="grcoco">
                <img data-index="step-9" src="<?php echo get_template_directory_uri() ?>/assets/img/ananas.svg" alt="Ananas" class="grananas">
                <img data-index="step-10" src="<?php echo get_template_directory_uri() ?>/assets/img/citrouille.svg" alt="citrouille"class="grcitrouille">
              </div>
            </div>
          </div>
        </div> 

      <div class="container text-center py-3">
        <div class="row">
          <div class="col-md-10 offset-md-1 btnfruits">
            <div class="text js-text">  
              <ul class="flex-row nav nav-pills links js-links">

                <li class="nav-item"><a class="nav-link active" data-index="step-1" href="#">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/pttpois.svg" alt="petits pois" class="pttpois"><br>
                    4 sem.
                  </a>
                </li>

                <li class="nav-item"><a class="nav-link" data-index="step-2" href="#">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/framboise.svg" alt="framboise" class="framboise"><br>
                    8 sem.
                  </a>
                </li>

                <li class="nav-item"><a class="nav-link" data-index="step-3" href="#">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/kiwi.svg" alt="kiwi" class="kiwi"><br>
                    12 sem.
                  </a>
                </li>

                <li class="nav-item"><a class="nav-link" data-index="step-4" href="#">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/poire.svg" alt="poire" class="poire"><br>
                    16 sem.
                  </a>
                </li>

                <li class="nav-item"><a class="nav-link" data-index="step-5" href="#">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/artichaud.svg" alt="artichaud" class="artichaud"><br>
                    20 sem.
                  </a>
                </li>

                <li class="nav-item"><a class="nav-link" data-index="step-6" href="#">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/orange.svg" alt="orange" class="orange"><br>
                    24 sem.
                  </a>
                </li>

                <li class="nav-item"><a class="nav-link" data-index="step-7" href="#">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/chouxfleur.svg" alt="choux fleur" class="choufleur"><br>
                    28 sem.
                  </a>
                </li>

                <li class="nav-item"><a class="nav-link" data-index="step-8" href="#">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/coco.svg" alt="noix de coco" class="coco"><br>
                    32 sem.
                  </a>
                </li>

                <li class="nav-item"><a class="nav-link" data-index="step-9" href="#">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/ananas.svg" alt="Ananas" class="ananas"><br>
                    36 sem.
                  </a>
                </li>

                <li class="nav-item"><a class="nav-link" data-index="step-10" href="#">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/citrouille.svg" alt="citrouille" class="citrouille"><br>
                    40 sem.
                  </a>
                </li>

              </ul>
            </div>
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
                      

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/femmehomme.svg" alt="Symbole maman et papa">
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



  

<?php get_footer();?>