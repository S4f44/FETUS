<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FetUs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\monstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap" rel="stylesheet">
</head>
<body>
<!------------------HEADER----------------->
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <a class="navbar-brand d-lg-none" href="#">
                <img src="assets/img/logo.svg" alt="logo FetUs">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="toutsavoir.html">Tout savoir sur<br> la grossesse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="conseils.html">Conseils</a>
                    </li>
                    <!-- ESPACE AVANT LE LOGO -->
                    <li class="nav-item space-between"></li>

                    <!-- LOGO (CENTRÉ) -->
                    <a class="navbar-brand d-none d-lg-block mx-auto" href="index.html">
                        <img src="assets/img/logo.svg" alt="logo FetUs">
                    </a>

                    <!-- ESPACE APRÈS LE LOGO -->
                    <li class="nav-item space-between"></li>

                    <li class="nav-item">
                        <a class="nav-link" href="monsuivi.html">Mon suivi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mesobjectifs.html">Mes objectifs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  </header>

<!------------------MAIN----------------->
<main>
    <section class="presentation">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-12 grossesse">
            <h1>Tout savoir sur<br> la grossesse</h1><br>
            <p>Bienvenue dans le monde captivant de la grossesse, une aventure extraordinaire marquée par neuf mois de transformations et de développements à la fois pour la future maman, le futur papa (ou co-parent) et pour le petit être qui grandit au sein de cette expérience unique.</p><br>
            <p>Au fil de cette aventure partagée, découvrez comment chaque étape contribue au développement tant du futur bébé que de la relation entre les parents</p>
          </div>
        </div>
      </div>
    </section>

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

      <section class="accordionpatho">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-10 offset-md-1">
              <h2>Quelques pathologies à connaître</h2>
                <div class="accordion" id="accordionExample">
                  <!-- Accordion Item 1 -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseToxo" aria-expanded="true" aria-controls="collapseToxo">
                        Toxoplasmose (une infection due à un parasite microscopique)
                      </button>
                    </h2>
                    <div id="collapseToxo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        
                        <!-- Nested Accordion for Subsections -->
                        <div class="accordion" id="subAccordionToxo">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSymptoToxo" aria-expanded="true" aria-controls="collapseSymptoToxo">
                                Symptômes
                              </button>
                            </h2>
                            <div id="collapseSymptoToxo" class="accordion-collapse collapse" data-bs-parent="#subAccordionToxo">
                              <div class="accordion-body">
                                <!-- Content for Symptômes -->
                                <ol>
                                  <li>Symptômes semblables à la grippe : Fièvre, maux de tête, fatigue, douleurs musculaires.</li>
                                  <li>Enflure des ganglions lymphatiques : Surtout au niveau du cou.</li>
                                  <li>Symptômes pseudo-grippaux : Les symptômes peuvent ressembler à ceux de la grippe.</li>
                                  <li>Douleurs musculaires : Des douleurs musculaires peuvent se produire.</li>
                                  <li>Fatigue : Une fatigue générale peut être ressentie.</li>
                                  <li>Symptômes oculaires : En cas d'infection oculaire, des symptômes tels que la vision floue ou des douleurs oculaires peuvent survenir.</li>
                                </ol>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEviterToxo" aria-expanded="true" aria-controls="collapseEviterToxo">
                                Comment éviter ?
                              </button>
                            </h2>
                            <div id="collapseEviterToxo" class="accordion-collapse collapse" data-bs-parent="#subAccordionToxo">
                              <div class="accordion-body">
                                <!-- Content for Comment éviter -->
                                <p>Bien se laver les mains, bien cuir les aliments que vous mangez, laver correctement vos ustensiles de cuisine, ne pas nettoyer la litière de votre chat si vous en avez un.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End of Nested Accordion for Subsections -->
                      </div>
                    </div>
                  </div>
                
                  <!-- Accordion Item 2 -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRub" aria-expanded="true" aria-controls="collapseRub">
                        Rubéole
                      </button>
                    </h2>
                    <div id="collapseRub" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        
                        <!-- Nested Accordion for Subsections -->
                        <div class="accordion" id="subAccordionRub">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSymptoRub" aria-expanded="true" aria-controls="collapseSymptoRub">
                                Symptômes
                              </button>
                            </h2>
                            <div id="collapseSymptoRub" class="accordion-collapse collapse" data-bs-parent="#subAccordionRub">
                              <div class="accordion-body">
                                <!-- Content for Symptômes -->
                                <ol>
                                  <li>Éruption cutanée : Une éruption cutanée légère apparaît souvent en premier, généralement sur le visage, puis se propage au reste du corps.</li>
                                  <li>Ganglions enflés : Les ganglions lymphatiques, en particulier ceux derrière les oreilles et dans le cou, peuvent devenir enflés et douloureux.</li>
                                  <li>Fièvre : Une fièvre modérée peut accompagner l'éruption cutanée.</li>
                                  <li>Symptômes pseudo-grippaux : Des symptômes tels que des maux de tête, des douleurs musculaires et articulaires, ainsi que des symptômes pseudo-grippaux comme la fatigue et une perte d'appétit peuvent se produire.</li>
                                  <li>Yeux rouges et larmoyants : Une conjonctivite, caractérisée par des yeux rouges et larmoyants, peut être présente.</li>
                                </ol>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEviterRub" aria-expanded="true" aria-controls="collapseEviterRub">
                                Comment éviter ?
                              </button>
                            </h2>
                            <div id="collapseEviterRub" class="accordion-collapse collapse" data-bs-parent="#subAccordionRub">
                              <div class="accordion-body">
                                <!-- Content for Comment éviter -->
                                <p>Éviter le contact avec les petits enfants</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End of Nested Accordion for Subsections -->
                      </div>
                    </div>
                  </div>
                
                  <!-- Accordion Item 3 -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDiab" aria-expanded="true" aria-controls="collapseDiab">
                        Diabète gestationnelle
                      </button>
                    </h2>
                    <div id="collapseDiab" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        
                        <!-- Nested Accordion for Subsections -->
                        <div class="accordion" id="subAccordionDiab">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSymptoDiab" aria-expanded="true" aria-controls="collapseSymptoDiab">
                                Symptômes
                              </button>
                            </h2>
                            <div id="collapseSymptoDiab" class="accordion-collapse collapse" data-bs-parent="#subAccordionDiab">
                              <div class="accordion-body">
                                <!-- Content for Symptômes -->
                                <ol>
                                  <li>Polyurie : Augmentation de la fréquence des mictions (uriner plus fréquemment).</li>
                                  <li>Polydipsie : Augmentation de la soif.</li>
                                  <li>Polyphagie : Augmentation de l'appétit.</li>
                                  <li>Fatigue : Une sensation générale de fatigue peut être présente.</li>
                                  <li>Prise de poids excessive : Une prise de poids excessive peut se produire chez la mère ou le bébé.</li>
                                  <li>Infections fréquentes : Une susceptibilité accrue aux infections, en particulier des voies urinaires.</li>
                                </ol>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEviterDiab" aria-expanded="true" aria-controls="collapseEviterDiab">
                                Comment éviter ?
                              </button>
                            </h2>
                            <div id="collapseEviterDiab" class="accordion-collapse collapse" data-bs-parent="#subAccordionDiab">
                              <div class="accordion-body">
                                <!-- Content for Comment éviter -->
                                <p>Surveiller votre alimentation, sans pour autant vous priver. La prise de poids idéale pendant la grossesse n’existe pas. Elle va dépendre de votre IMC (indice de masse corporelle).</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End of Nested Accordion for Subsections -->
                      </div>
                    </div>
                  </div>
                </div>
                

            </div>
          </div>
        </div>
      </section>

      <section class="consultmedecin">
        <div class="container text-center">
            <div class="row">
              <div class="col-md-6 consult">
                <h2>Situations où vous devez consulter votre médecin traitant</h2>
              </div>
              <div class="col-md-6">
                <ul>
                    <li><strong>Perte de sang vaginales </strong>(abondante ou non). Si le flux est abondant, la femme enceinte peut être en train de faire une hémorragie et risque de perdre le bébé.</li>
                    <li><strong>Douleur intense et soudaine</strong></li>
                    <li>Suite à un <strong>choc</strong> (tombée ou accident par exemple)</li>
                    <li>Si on ne sent plus son <strong>bébé bouger</strong> (après quelques heures parce qu’il se pourrai qu’il soit juste calme)</li>
                    <li>Apparition de l’un ou plusieurs des <strong>symptômes</strong> suivantes (acouphènes, barre épigastrique : douleur ou inconfort dans la région supérieure de l’abdomen, trouble visuels, jambes gonflées et migraines intenses) ces symptômes pourraient indiquer la prééclampsie.</li>
                </ul>
              </div>
            </div>
        </div>
      </section>

      <section>
        <div class="container text-center">
            <div class="row">
              <div class="col-md-12">
                <h3>En cas de complications, de questions ou de symptômes inhabituels, nous vous encourageons vivement à consulter votre médecin, gynécologue ou professionnel de la santé pour des conseils personnalisés !</h3><br>
                <h3>Votre santé et celle de cotre bébé est essentielle !</h3>
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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="assets\js\monjs.js"></script>
</body>
</html>