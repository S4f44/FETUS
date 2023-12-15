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
      
    <!-- <section class="fruits">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-10 offset-md-1 my-5">
              <h2>Les stades de la grossesse</h2>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pttpois.svg" alt="petits pois">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/framboise.svg" alt="framboise">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kiwi.svg" alt="kiwi">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/poire.svg" alt="poire">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/artichaud.svg" alt="artichaud">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/orange.svg" alt="orange">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/chouxfleur.svg" alt="choux fleur">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/coco.svg" alt="noix de coco">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/citrouille.svg" alt="citrouille">
              <a href="#" class="btnprimaire">En savoir plus</a>
            </div>
          </div>
        </div>
      </section> -->

      
<section class="fruits">

<div id="fruitCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php
        $fruits = array(
            array(
                'img' => 'pttpois.svg',
                'alt' => 'Petits pois',
                'title' => 'Petits pois',
                'content' => '<strong>4 semaines</strong> : Le blastocyste s\'implante dans l\'utérus. <br> <strong>Poids :</strong> Environ 0,004 gramme (4 milligrammes).  <br> <strong>Taille :</strong> Environ 0,1 mm.'
            ),
            array(
                'img' => 'framboise.svg',
                'alt' => 'Framboise',
                'title' => 'Framboise',
                'content' => '<strong>8 semaines :</strong> On considère généralement que la grossesse commence à partir de la semaine de retard des règles. <br>  <strong> Poids</strong> : Environ 1 gramme.  <br> <strong>Taille :</strong> Environ 1,6 cm.'
            ),
            array(
                'img' => 'kiwi.svg',
                'alt' => 'Kiwi',
                'title' => 'Kiwi',
                'content' => '<strong>12 semaines :</strong> Fin du premier trimestre.   <br>  <strong>Poids :</strong> Environ 14 grammes.  <br>  <strong>Taille</strong> : Environ 6,3 cm.'
            ),
            array( 
              'img' => 'poire.svg',
              'alt' => 'Poire',
              'title' => 'Poire',
              'content' => '<strong>16 semaines :</strong>  Le fœtus a généralement développé des traits faciaux distincts, des doigts et des orteils, et il commence à bouger activement.  <br> <strong>Poids :</strong>  Environ 100 à 150 grammes.  <br> <strong>Taille :</strong> Environ 11 à 12,7 cm '
          ),
          array(
            'img' => 'artichaud.svg',
            'alt' => 'Artichaud',
            'title' => 'Artichaud',
            'content' => '<strong>20 semaines :</strong> Mi-grossesse.   <br> <strong>Poids :</strong> Environ 300 grammes.   <br> <strong>Taille :</strong> Environ 16 cm.'
        ),
          array(
              'img' => 'orange.svg',
              'alt' => 'Orange',
              'title' => 'Orange',
              'content' => '<strong>24 semaines :</strong>Les organes vitaux continuent de se développer, les poumons atteignent un stade où la survie en dehors de l\'utérus est envisageable, bien que la prématurité reste un défi important à ce stade.  <br>  <strong>Poids :</strong> Environ 600 à 700 grammes.   <br> <strong>Taille :</strong> Environ 30 cm. '
          ),
          array(
              'img' => 'chouxfleur.svg',
              'alt' => 'Chou-fleur',
              'title' => 'Choux-fleur',
              'content' => '<strong>28 semaines :</strong> Début du troisième trimestre.   <br> <strong>Poids :</strong> Environ 1 kg.   <br> <strong>Taille :</strong> Environ 35,6 cm.'
          ),
          array(
              'img' => 'coco.svg',
              'alt' => 'Noix de coco',
              'title' => 'Noix de coco',
              'content' => '<strong>32 semaines :</strong> Le fœtus se prépare aux fonctions respiratoires et continue de prendre du poids.   <br> <strong>Poids :</strong> Environ 1,8 kg.   <br> <strong>Taille :</strong> Environ 42 cm.'
          ),
          array(
              'img' => 'ananas.svg',
              'alt' => 'Ananas',
              'title' => 'Ananas',
              'content' => '<strong>36 semaines :</strong> Il adopte généralement une position en vue de l\'accouchement.   <br> <strong> Poids :</strong> Environ 2,6 kg.   <br> <strong>Taille :</strong> Environ 47 cm.'
          ),
          array(
              'img' => 'citrouille.svg',
              'alt' => 'Citrouille',
              'title' => 'Citrouille',
              'content' => '<strong>40 semaines (à terme) :</strong> Il est prêt pour l\'accouchement, démontrant des réflexes développés et un système immunitaire renforcé.   <br> <strong>Poids moyen à la naissance :</strong> Environ 3,4 kg.   <br> <strong>Taille moyenne à la naissance :</strong> Environ 50 cm.'
          ),
      );
      
       

        foreach ($fruits as $index => $fruit) :
        ?>
            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-md mb-3 d-flex">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $fruit['img']; ?>" alt="<?php echo $fruit['alt']; ?>" class="mx-auto d-block">
                        </div>
                        <div class="col-md-7">
                            <div class="text">
                                <h3><?php echo $fruit['title']; ?></h3>
                                <p><?php echo $fruit['content']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

        <!-- bouton carousel  -->
            <div class="button-container">
              <a class="carousel-control-prev" href="#fruitCarousel" role="button" data-slide="prev">
                  <div class="col-md-3">    
                  <div class="btnsecondaire">
                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                    <span class="sr-only">Previous</span> 
                  </div>
                  </div>
              </a>
              <a class="carousel-control-next" href="#fruitCarousel" role="button" data-slide="next">
                <div class=" col-md-11">
                <div class="btnsecondaire">
                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                    <span class="sr-only">Next</span>
                </div>
                </div>
              </a>
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