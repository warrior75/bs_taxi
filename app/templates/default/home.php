<?php $this->layout('layout', [
'title' => 'Accueil',
'infos' => $infos,
'errors' =>$errors

]) ?>

<?php $this->start('main_content') ?>

   
    <section id="metier">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Le Metier</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-taxi fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Salarié en entreprise</h4>
                    <p class="p_justify text-muted">L'autorisation de stationnement est au nom d'une société, il s'agit bien souvent d'un véhicule de doublage (deux conducteurs pour le même véhicule). Le conducteur doit ramener chaque jour le véhicule au garage et perçoit, outre un fixe journalier au tarif en vigueur, 30% brut du compteur, il conserve les suppléments et les pourboires. L'entretien du véhicule et le carburant sont à la charge de l'employeur qui paie également les cotisations sociales. Le chauffeur reçoit chaque mois une fiche de paie.</p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-road fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Locataire en entreprise</h4>
                    <p class="p_justify text-muted">L'autorisation de stationnement est au nom d'une société qui confie au conducteur un véhicule tout équipé taxi.
                    Le locataire paie un loyer mensuel ( payable par semaine) ce loyer est TTC mais le chauffeur récupère la TVA.</p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-male fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Artisan</h4>
                    <p class="p_justify text-muted">L'artisan achète ou obtient une licence d'artisan, il achète également son véhicule. L'autorisation de stationnement est à son nom. Les charges sociales, l'assurance, l'entretien, le carburant sont réglés par l'artisan. Il bénéficie de la détaxe sur les carburants. Il est travailleur indépendant.
                    </p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-euro fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Actionnaire</h4>
                    <p class="p_justify text-muted">L'actionnaire achète une action dans une société déjà existante. Le prix d'une action est beaucoup moins élevé que celui d'une licence d'artisan. L'autorisation de stationnement est au nom d'une coopérative ainsi que la carte grise du véhicule. L'actionnaire paie à la coopérative une somme mensuelle équivalente aux charges sociales, aux frais de gestion et à l'assurance du véhicule.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="formation" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">La Formation</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
                        <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?= $this->assetUrl('img/about/1.jpg') ?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Condition d'accès à la formation</h4>
                                    
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Etre titulaire du permis B depuis au moins trois ans (ce qui implique que l’âge minimal pour être taxi est de 21 ans) et ne pas avoir commis d’infraction ou de retrait du permis pour conduite en état d’ivresse ou autre délit grave, <br>• passer une visite médicale obligatoire,<br>• avoir un casier judiciaire vierge,<br>• avoir passé un diplôme de secourisme : la formation Prévention et secours civiques de niveau 1 (PSC1)</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?= $this->assetUrl('img/about/2.png') ?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Formation nécessaire</h4>
                                    
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Le CCPCT s’obtient après une formation sanctionnée par un examen en deux parties <br>(nationale et départementale), comportant des épreuves théoriques et pratiques. <br>L’examen départemental n’est valable que dans le département dans lequel exerce le <br>chauffeur de taxi. Pour pouvoir exercer dans un autre département, il faut repasser la <br>partie départementale de l’examen dans le département désiré.<br>Une fois le certificat de capacité professionnelle obtenu, la préfecture délivre la carte <br>professionnelle de conducteur de taxi.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?= $this->assetUrl('img/about/3.jpg') ?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Durée de la formation</h4>
                                    
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">La formation qui prépare à l’examen dure entre 200 et 400 heures (certaines matières <br>sont optionnelles), sur une période de 3 à 6 mois, en fonction des capacités et des <br>disponibilités du candidat. Elle est dispensée soit dans un centre de formation en sessions <br>collectives ou bien à titre individuel, en candidat libre.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?= $this->assetUrl('img/about/4.png') ?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Composition de l’examen</h4>
                                   
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Une épreuve d’admissibilité : l’épreuve nationale (connaissance de la langue française, <br>réglementation nationale de la profession, gestion, code de la route, sécurité).<br>• une épreuve d’admission : l’épreuve locale ou départementale (connaissance <br>topographique, réglementation locale, itinéraires, conduite d’un véhicule taxi, <br>mémorisation d’adresses, connaissance des monuments, bâtiments publics, <br>administrations…).</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Qu'attendez
                                    <br>Vous
                                    <br>....</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?= $this->assetUrl('img/logos/envato.jpg') ?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?= $this->assetUrl('img/logos/designmodo.jpg') ?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?= $this->assetUrl('img/logos/themeforest.jpg') ?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?= $this->assetUrl('img/logos/creative-market.jpg') ?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- About Section -->
    <section id="financement">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Financement</h2>
                    <h3 class="section-subheading text-muted">Coût moyen de la formation de taxi initiale : <br>2000€ TTC pour une formation complète aux examens.<br>Les frais de formation peuvent être pris en charge, totalement ou partiellement via :</h3>
                </div>
            </div>
 <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.pole-emploi.fr/employeur/la-preparation-operationnelle-a-l-emploi-poe--@/article.jspz?id=60880" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                
                            </div>
                        </div>
                        <img src="<?= $this->assetUrl('img/financement/PO.jpg') ?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>POE</h4>
                        <p class="text-muted">Préparation Opérationnelle à l’Emploi, en lien avec Pôle Emploi</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.pole-emploi.fr/candidat/l-aide-individuelle-a-la-formation-aif--@/article.jspz?id=60856" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                
                            </div>
                        </div>
                        <img src="<?= $this->assetUrl('img/financement/aif.jpg') ?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>AIF</h4>
                        <p class="text-muted">Aide Individuelle à la Formation</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="https://www.bred.fr/index.htmlhttps://www.bred.fr/index.html" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                
                            </div>
                        </div>
                        <img src="<?= $this->assetUrl('img/financement/bred.png') ?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>BRED</h4>
                        <p class="text-muted">Partenaire bancaire  pour un prêt « étudiant » remboursable après la fin de la formation.</p>
                    </div>
                </div>
                
                
               
    </section>

    <!-- Team Section -->
    <section id="contact" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2   id="contact" class="section-subheading text-muted">contact</h2>
                    <h3 class="section-subheading text-muted">Contactez-nous pour avoir des informations complémentaires</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h3>Nous trouver :</h3>
                    <p class="text-muted">BS Taxi<br>
                        10 rue du Paradis <br>
                        75010 Paris <br>
                        01.34.10.25.65
                    </p>

                    <div id="map"></div>

                </div>
            <div class="col-sm-6">
                    <form class="form-horizontal" role="form" method="post" action="<?php echo $this->url('mail') ; ?>">
                     <?php if (isset($infos['good'])) : ?>
                                <p class="bg-success" ><?php echo $infos['good']; ?></p>
                             <?php endif; ?>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                            </div>
                        </div>
                        <div class="form-group">
                         <?php if (isset($errors['message'])) : ?>
                                <p class="bg-danger" ><?php echo $errors['message']; ?></p>
                             <?php endif; ?>
                            <label for="message" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="4" name="message"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                         <?php if (isset($errors['robot'])) : ?>
                                <p class="bg-danger" ><?php echo $errors['robot']; ?></p>
                             <?php endif; ?>
                            <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted"></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?= $this->assetUrl('img/logos/envato.jpg') ?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?= $this->assetUrl('img/logos/designmodo.jpg') ?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?= $this->assetUrl('img/logos/themeforest.jpg') ?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?= $this->assetUrl('img/logos/creative-market.jpg') ?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
    
    
<?php $this->stop('main_content') ?>
