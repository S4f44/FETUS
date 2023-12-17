<?php get_header(); ?>

  <!--------------------MAIN------------------>
<main>
  <section class="presentationconseils">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <h1>Conseils</h1>
          <p>Parcourez cette page avec nous pour découvrir des conseils pratiques et des informations essentielles qui feront de votre parcours vers la parentalité une expérience épanouissante et sereine.</p>
        </div>
      </div>
    </div>
  </section>
<!-- 
  <section class="premiertri">
    <div class="container text-center">
        <div class="row">
          <div class="col-md-8">
            <div class="txtconseils">
              <h2>Premier trimestre</h2><br>
              <ul class="custom-list">
                  <li>Ménager la femme enceinte</li><br>
                  <li>Le partenaire peut prendre en charge certaines tâches ménagères, comme la cuisine, en raison de la sensibilité accrue aux odeurs. Éviter les déclencheurs olfactifs pour minimiser les nausées et l'hypersensibilité.</li><br>
                  <li>Créer un environnement calme et apaisant pour atténuer la fatigue et favoriser le bien-être.</li><br>
                  <li>Comprendre les effets des hormones telles que l'HCG, l'œstrogène et la progestérone sur les nausées et la fatigue</li><br>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="chiffres">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/un.svg" alt="Chiffre un">
              </div>
          </div>
        </div>
    </div>
  </section> -->
          <?php 
                $conseilsunList = new WP_Query(['post_type' => 'conseilsun']);
            ?>
            <?php if ($conseilsunList->have_posts()): ?>
              <section class="premiertri">
                <div class="container text-center">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="txtconseils">
                          <h2>Premier trimestre</h2><br>
                            <ul class="custom-list">
                            <?php while ($conseilsunList->have_posts()): $conseilsunList->the_post(); ?>
                                <li>
                                  <?php the_title(); ?>
                                  <?php the_content(); ?>
                                </li>
                            <?php endwhile; ?>
                            </ul>
                          </div>
                        </div>
                      <div class="col-md-4">
                    <div class="chiffres">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/un.svg" alt="Chiffre un">
                </div>
            </div>
          </div>
        </div>
      </section>
                        <?php endif; ?>

  <!-- <section class="deuxiemetri">
    <div class="container text-center">
        <div class="row">
          <div class="col-md-4">
            <div class="chiffresdeux">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/deux.svg" alt="Chiffre deux">
              </div>
          </div>
          <div class="col-md-8">
            <div class="txtconseils">
             <h2>Second trimestre</h2><br>
              <ul class="custom-list">
                  <li>Profiter de la période plus stable pour envisager des cours de préparation à l'accouchement.</li><br>
                  <li>Se renseigner sur les techniques de gestion de la douleur, la respiration et les soins post-partum.</li><br>
                  <li>Encourager la future maman à se préparer mentalement et physiquement pour l'accouchement.</li><br>
                  <li>Capitaliser sur la stabilisation des hormones à noter que les niveaux d'HCG commencent à se stabiliser, réduisant les symptômes tels que les nausées.</li><br>
                  <li>Profiter de cette période plus confortable pour renforcer la connexion émotionnelle avec le futur bébé.</li><br>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </section> -->

            <?php 
                $conseilsdeuxList = new WP_Query(['post_type' => 'conseilsdeux']);
            ?>
            <?php if ($conseilsdeuxList->have_posts()): ?>
              <section class="deuxiemetri">
                <div class="container text-center">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="chiffresdeux">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/deux.svg" alt="Chiffre deux">
                          </div>
                      </div>
                      <div class="col-md-8">
                        <div class="txtconseils">
                          <h2>Second trimestre</h2><br> 
                            <ul class="custom-list">
                            <?php while ($conseilsdeuxList->have_posts()): $conseilsdeuxList->the_post(); ?>
                                <li>
                                  <?php the_title(); ?>
                                  <?php the_content(); ?>
                                </li>
                            <?php endwhile; ?>
                            </ul>
                          </div>
                        </div>
                      
                    </div>
                  </div>
                </section>
            <?php endif; ?>



  <!-- <section class="troisiemetri">
    <div class="container text-center">
        <div class="row">
          
          <div class="col-md-8">
            <div class="txtconseils">
              <h2>Troisième trimestre</h2><br>
              <ul class="custom-list">
                  <li>Priorité au repos</li><br>
                  <li>Encourager des pauses régulières pour préserver l'énergie en prévision de l'accouchement.</li><br>
                  <li>Impliquer le partenaire dans la gestion des responsabilités domestiques pour permettre à la future maman de se concentrer sur son bien-être.</li><br>
                  <li>Favoriser une communication ouverte sur les attentes, les inquiétudes et les préoccupations liées à l'accouchement et à la parentalité.</li><br>
                  <li>Renforcer le lien affectif de votre couple pour accueillir le bébé dans une environnement serein.</li><br>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="chiffres">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trois.svg" alt="Chiffre trois">
              </div>
          </div>
        </div>
    </div>
  </section> -->

          <?php 
              $conseilstroisList = new WP_Query(['post_type' => 'conseilstrois']);
          ?>
            <?php if ($conseilstroisList->have_posts()): ?>
              <section class="troisiemetri">
                <div class="container text-center">
                  <div class="row">
                    
                    <div class="col-md-8">
                      <div class="txtconseils">
                        <h2>Troisième trimestre</h2><br> 
                          <ul class="custom-list">
                          <?php while ($conseilstroisList->have_posts()): $conseilstroisList->the_post(); ?>
                              <li>
                                <?php the_title(); ?>
                                <?php the_content(); ?>
                              </li>
                          <?php endwhile; ?>
                          </ul>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="chiffres">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trois.svg" alt="Chiffre trois">
                      </div>
                    </div>

                  </div>
                </div>
              </section>
            <?php endif; ?>



  <section class="accordionnutrition">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h2>Nutrition</h2>
                <p>La femme enceinte doit éviter certains aliments potentiellement <strong>nocifs pour <br>sa santé et celle du bébé.</strong></p><br>
                <p>Ces aliments sont :</p>
                <div class="accordion" id="accordionExample">
                    <!-- Accordion Item 1 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFish" aria-expanded="true" aria-controls="collapseFish">
                              Poissons à forte teneur en mercure
                            </button>
                        </h3>
                        <div id="collapseFish" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Éviter les espèces comme le requin, le maquereau royal et le thon à nageoires jaunes en raison de leur concentration élevée en mercure, qui peut être dommageable pour le développement du cerveau du fœtus.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 2 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMeat" aria-expanded="true" aria-controls="collapseMeat">
                              Viandes crues ou insuffisamment cuites 
                            </button>
                        </h3>
                        <div id="collapseMeat" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Éviter la consommation de viandes crues ou peu cuites, comme le tartare, le carpaccio, et les œufs crus, pour minimiser le risque d'infections alimentaires.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 3 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMilk" aria-expanded="true" aria-controls="collapseMilk">
                              Produits laitiers non pasteurisés 
                            </button>
                        </h3>
                        <div id="collapseMilk" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Éviter les fromages au lait cru et autres produits laitiers non pasteurisés, susceptibles de contenir des bactéries nocives telles que la listeria.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 4 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProcessedMeat" aria-expanded="true" aria-controls="collapseProcessedMeat">
                              Charcuterie et viandes transformées  
                            </button>
                        </h3>
                        <div id="collapseProcessedMeat" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Limiter la consommation de charcuterie et de viandes transformées en raison du risque accru de contamination par des agents pathogènes.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 5 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCaffeine" aria-expanded="true" aria-controls="collapseCaffeine">
                              Caféine excessive  
                            </button>
                        </h3>
                        <div id="collapseCaffeine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Limiter la consommation de caféine, en raison de son lien possible avec des complications pendant la grossesse. Il est recommandé de ne pas dépasser 200 mg de caféine par jour.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Item 6 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAlcohol" aria-expanded="true" aria-controls="collapseAlcohol">
                               Alcool  
                            </button>
                        </h3>
                        <div id="collapseAlcohol" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Éviter complètement la consommation d'alcool pendant la grossesse, car cela peut entraîner des problèmes de développement chez le fœtus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
<div class="container text-center">
        <div class="row">
            <div class="col-md-12 lovemessage ">

            <p>À toutes les personnes qui traversent des moments délicats au cours de cette période cruciale de développement, 
              sachez que chaque parcours de grossesse est unique, avec ses propres défis, mais sachez aussi que <strong> vous n'êtes pas seul(e)s ! </strong>
              Les professionnels de la santé sont là pour vous guider et vous soutenir tout au long de ce voyage. Prenez le temps de vous entourer de <strong>vos proches, </strong>
              trouvez du réconfort dans votre réseau de soutien, et rappelez-vous que <strong>votre force et votre résilience sont admirables </strong>. Vous méritez tout le soutien et l'amour pendant cette période, 
              et nous croyons en votre capacité à surmonter les difficultés. <strong>Restez fort(e)s </strong>, prenez soin de vous et continuez à avancer avec la certitude que l'espoir et le soutien vous accompagnent. <p> 

            </div>
        </div>
 </div>
</section>



</main>

  
<?php get_footer(); ?>