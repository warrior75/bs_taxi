<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $this->e($title) ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= $this->assetUrl('css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= $this->assetUrl('css/agency.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= $this->assetUrl('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
    
    <!-- hover.css -->
    <link href="<?= $this->assetUrl('hover/hover-min.css') ?>" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="index">
    <?php if (isset($_SESSION['message'])) : ?>
        <p class="bg-success" ><?php echo $_SESSION['message']; ?></p>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top">Formation BS Taxi</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden">
						<a href="#page-top"></a>
					</li>
					<li>
						<a class="page-scroll" href="#metier">Le Métier</a>
					</li>
					<li>
						<a class="page-scroll" href="#formation">La Formation</a>
					</li>
					<li>
						<a class="page-scroll" href="#financement">Financement</a>
					</li>
					<li>
						<a class="page-scroll" href="#contact">Contact</a>
					</li>
					<li>
                        <?php if(isset($_SESSION['user'])) : ?>
                           <?php  $role = $_SESSION['user']['role']; ?>
          
                            <a class="page-scroll" href=" <?= $this->url($role); ?> ">Mon espace</a>
                        
                        <?php else: ?>

                              <a class="page-scroll" href="<?= $this->url('connexion'); ?>">Se Connecter</a>
                        <?php  endif;?>
                    </li>
                </ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<!-- Header -->
	<header>
		<div class="container">
			<div class="intro-text">
				<div class="intro-lead-in"></div>
				<div class="intro-heading"></div>
				
			</div>
		</div>
	</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Césario , Mohand et Bilel</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li>
                            <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <span id="inline"class="portfolio-link">Mentions légales</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <span id="inline2"class="portfolio-link">CGU</span>
                                    </div>
                                </div>
                            </a>
                        </li>
        
                    </ul>
              
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Mentions légales</h2>
                                <strong>La seule contrepartie à l'utilisation de ces mentions légales, est l'engagement total à laisser le lien crédit subdelirium sur cette page de mentions légales.</strong><br />
                            Vos mentions légales :
                            <h2>Informations légales</h2>
                            <h3>1. Présentation du site.</h3>
                            <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>
                            <p><strong>Propriétaire</strong> : M. Mouad ABDELLI – SARL BS TAXI – 20 rue du Paradis 75020<br />
                            <strong>Créateur</strong>  : <a href="www.bmc-concept.com">BMC Concept</a><br />
                            <strong>Responsable publication</strong> : Mohand Bilel Cesario – meslem.bilel@gmail.com<br />
                            Le responsable publication est une personne physique ou une personne morale.<br />
                            <strong>Webmaster</strong> : BMC Concept – contact@bmc-concept.com<br />
                            <strong>Hébergeur</strong> : www.ovh.com – 10 place des serveurs<br />
                            Crédits : les mentions légales ont été générées et offertes par Subdelirium <a target="_blank" href="http://www.subdelirium.com/competences/creation-de-sites-web/creation-de-site-internet-en-charente/" alt="creation site web charente">création de site web Charente</a></p>

                            <h3>2. Conditions générales d’utilisation du site et des services proposés.</h3>
                            <p>L’utilisation du site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a> implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a> sont donc invités à les consulter de manière régulière.</p>
                            <p>Ce site est normalement accessible à tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut être toutefois décidée par M. Mouad ABDELLI, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>
                            <p>Le site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a> est mis à jour régulièrement par Mohand Bilel Cesario. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>
                            <h3>3. Description des services fournis.</h3>
                            <p>Le site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a> a pour objet de fournir une information concernant l’ensemble des activités de la société.</p>
                            <p>M. Mouad ABDELLI s’efforce de fournir sur le site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a> des informations aussi précises que possible. Toutefois, il ne pourra être tenue responsable des omissions, des inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>
                            <p>Tous les informations indiquées sur le site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a> sont données à titre indicatif, et sont susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a> ne sont pas exhaustifs. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>
                            <h3>4. Limitations contractuelles sur les données techniques.</h3>
                            <p>Le site utilise la technologie JavaScript.</p>
                            <p>Le site Internet ne pourra être tenu responsable de dommages matériels liés à l’utilisation du site. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour</p>
                            <h3>5. Propriété intellectuelle et contrefaçons.</h3>
                            <p>M. Mouad ABDELLI est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, graphismes, logo, icônes, sons, logiciels.</p>
                            <p>Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de : M. Mouad ABDELLI.</p>
                            <p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>
                            <h3>6. Limitations de responsabilité.</h3>
                            <p>M. Mouad ABDELLI ne pourra être tenue responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site www.BS-TAXI.com, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
                            <p>M. Mouad ABDELLI ne pourra également être tenue responsable des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une chance) consécutifs à l’utilisation du site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a>.</p>
                            <p>Des espaces interactifs (possibilité de poser des questions dans l’espace contact) sont à la disposition des utilisateurs. M. Mouad ABDELLI se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données. Le cas échéant, M. Mouad ABDELLI se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie…).</p>
                            <h3>7. Gestion des données personnelles.</h3>
                            <p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.</p>
                            <p>A l'occasion de l'utilisation du site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a>, peuvent êtres recueillies : l'URL des liens par l'intermédiaire desquels l'utilisateur a accédé au site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a>, le fournisseur d'accès de l'utilisateur, l'adresse de protocole Internet (IP) de l'utilisateur.</p>
                            <p> En tout état de cause M. Mouad ABDELLI ne collecte des informations personnelles relatives à l'utilisateur que pour le besoin de certains services proposés par le site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a>. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a> l’obligation ou non de fournir ces informations.</p>
                            <p>Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant, en effectuant sa demande écrite et signée, accompagnée d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.</p>
                            <p>Aucune information personnelle de l'utilisateur du site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a> n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat de M. Mouad ABDELLI et de ses droits permettrait la transmission des dites informations à l'éventuel acquéreur qui serait à son tour tenu de la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a>.</p>
                            <p>Le site n'est pas déclaré à la CNIL car il ne recueille pas d'informations personnelles. .</p>
                            <p>Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.</p>
                            <h3>8. Liens hypertextes et cookies.</h3>
                            <p>Le site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a> contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de M. Mouad ABDELLI. Cependant, M. Mouad ABDELLI n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.</p>
                            <p>La navigation sur le site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a> est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur. Un cookie est un fichier de petite taille, qui ne permet pas l’identification de l’utilisateur, mais qui enregistre des informations relatives à la navigation d’un ordinateur sur un site. Les données ainsi obtenues visent à faciliter la navigation ultérieure sur le site, et ont également vocation à permettre diverses mesures de fréquentation.</p>
                            <p>Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’utilisateur peut toutefois configurer son ordinateur de la manière suivante, pour refuser l’installation des cookies :</p>
                            <p>Sous Internet Explorer : onglet outil (pictogramme en forme de rouage en haut a droite) / options internet. Cliquez sur Confidentialité et choisissez Bloquer tous les cookies. Validez sur Ok.</p>
                            <p>Sous Firefox : en haut de la fenêtre du navigateur, cliquez sur le bouton Firefox, puis aller dans l'onglet Options. Cliquer sur l'onglet Vie privée.
                              Paramétrez les Règles de conservation sur :  utiliser les paramètres personnalisés pour l'historique. Enfin décochez-la pour  désactiver les cookies.</p>
                            <p>Sous Safari : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par un rouage). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur Paramètres de contenu. Dans la section "Cookies", vous pouvez bloquer les cookies.</p>
                            <p>Sous Chrome : Cliquez en haut à droite du navigateur sur le pictogramme de menu (symbolisé par trois lignes horizontales). Sélectionnez Paramètres. Cliquez sur Afficher les paramètres avancés. Dans la section "Confidentialité", cliquez sur préférences.  Dans l'onglet "Confidentialité", vous pouvez bloquer les cookies.</p>

                            <h3>9. Droit applicable et attribution de juridiction.</h3>
                            <p>Tout litige en relation avec l’utilisation du site <a href="http://www.BS-TAXI.com/" title="M. Mouad ABDELLI - www.BS-TAXI.com">www.BS-TAXI.com</a> est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Paris.</p>
                            <h3>10. Les principales lois concernées.</h3>
                            <p>Loi n° 78-17 du 6 janvier 1978, notamment modifiée par la loi n° 2004-801 du 6 août 2004 relative à l'informatique, aux fichiers et aux libertés.</p>
                            <p> Loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique.</p>
                            <h3>11. Lexique.</h3>
                            <p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>
                            <p>Informations personnelles : « les informations qui permettent, sous quelque forme que ce soit, directement ou non, l'identification des personnes physiques auxquelles elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <div class="pageContent">
                    <div id="ctl00_PlaceHolderMain_EditorialContentDisplayEditModePanel_ctl02_label" style="display:none">Content Page Content</div>
                    <div id="ctl00_PlaceHolderMain_EditorialContentDisplayEditModePanel_ctl02__ControlWrapper_RichHtmlField" class="ms-rtestate-field" style="display:inline" aria-labelledby="ctl00_PlaceHolderMain_EditorialContentDisplayEditModePanel_ctl02_label">
                    <h4  class="custom-font">DEFINITIONS</h4>
                    <strong>FORMATION INTERENTREPRISES<br>
                    Stages et cycles interentreprises </strong>:<br>
                    Formation sur catalogue réalisée dans nos locaux ou dans des locaux mis à disposition par Demos.<br>
                    <br>
                    <strong>Parcours</strong>:<br>
                    •<span style="text-decoration:underline"> Parcours Pro individuel</span> : Parcours de formation préconisé associant plusieurs stages interentreprises.<br>
                    • <span style="text-decoration:underline">Parcours à la carte individuel</span> : Parcours de formation composé de plusieurs stages interentreprises issus du catalogue au libre choix du Client.<br>
                    <br>
                    <strong>FORMATION INTRAENTREPRISE</strong><br>
                    Formation réalisée sur mesure pour le compte d’un Client réalisée dans nos locaux, dans les locaux du Client ou dans des locaux mis à la disposition par le Client ou par Demos.<br>
                    <br>
                    <strong>FORMATION E-LEARNING</strong><br>
                    Formation ouverte et à distance par l'utilisation de Modules de formation<br>
                    <br>
                    <h4 class="custom-font">OBJET ET CHAMP D’APPLICATION</h4>
                    Toute commande de formation implique l’acceptation sans réserve par leClient et son adhésion pleine et entière aux présentes conditions générales de vente qui prévalent sur tout autre document du Client, et notamment sur toutes conditions générales d’achat. <br>
                    <br>
                    <h4 class="custom-font">DOCUMENTS CONTRACTUELS</h4>
                    Demos fait parvenir au Client, en double exemplaire, une convention de formation professionnelle continue établie selon les articles L6353-1 et L6353-2 du Code du travail. Le Client s’engage à retourner dans les plus brefs délais à Demos un exemplaire signé et portant son cachet commercial.<br>
                    Une attestation de présence est adressée au Client sur demande.<br>
                    <br>
                    <h4 class="custom-font">FORMATIONS INTERENTREPRISES</h4>
                    <span style="text-decoration:underline">Conditions Financières</span><br>
                    L’acceptation de Demos étant conditionnée par le règlement intégral de la facture, Demos se réserve expressément le droit de disposer librement des places retenues par le Client, tant que les frais d’inscription n’auront pas été couverts dans les conditions prévues ci- dessous.<br>
                    Les factures sont émises à l’inscription.<br>
                    Les prix des cycles et parcours pro indiqués au catalogue et les prix des parcours à la carte incluent une remise non cumulable avec toute offre spéciale, promotion ou autre remise. Les repas ne sont pas compris dans le prix des formations. Sauf avis contraire exprimé à l’inscription, ils sont facturés en sus.<br>
                    <br>
                    <span style="text-decoration:underline">Remplacement d’un participant</span><br>
                    Demos offre au Client la possibilité de remplacer un participant sans facturation supplémentaire jusqu’à l’ouverture de la session de formation concernée, Toute demande de remplacement devra être adressée par écrit.<br>
                    <br>
                    <span style="text-decoration:underline">Ouverture d’une session de formation</span><br>
                    Demos se réserve la possibilité d’ajourner une session de formation et ce sans indemnités, au plus tard une semaine avant la date prévue, pour des raisons pédagogiques.<br>
                    <br>
                    <span style="text-decoration:underline">Conditions d’annulation et de report</span><br>
                    Toute annulation par le Client doit être communiquée par écrit.<br>
                    <span style="text-decoration:underline">- Pour les stages interentreprises :</span><br>
                    Pour toute annulation, moins de 10 jours francs ouvrables avant le début du stage, le montant de la formation restera immédiatement exigible à titre d’indemnité forfaitaire.<br>
                    <span style="text-decoration:underline">- Pour les cycles et parcours :</span><br>
                    Pour toute annulation, moins de 10 jours francs ouvrables avant le début du cycle ou du 1er stage du parcours, 50% du montant de la formation restera immédiatement exigible à titre d’indemnité forfaitaire.<br>
                    Toutefois, dans ces deux cas, si Demos organise dans les 6 mois à venir une session de formation sur le même sujet, une possibilité de report sera proposée dans la limite des places disponibles et l’indemnité sera affectée au coût de cette nouvelle session.<br>
                    <br>
                    <h4 class="custom-font">FORMATIONS INTRAENTREPRISES</h4>
                    <span style="text-decoration:underline">Conditions Financières</span><br>
                    Une proposition commerciale et financière sera préalablement établie par Demos. Un acompte de 30% sera versé à la commande.<br>
                    Le complément est dû à réception des différentes factures émises au fur et à mesure de l’avancement des formations.<br>
                    En cas de non-paiement intégral d’une facture venue à échéance, après mise en demeure restée sans effet dans les 5 jours ouvrables, Demos se réserve la faculté de suspendre toute formation en cours et /ou à venir.<br>
                    <br>
                    <span style="text-decoration:underline">Remplacement d’un participant</span><br>
                    Demos offre au Client la possibilité de remplacer un participant sans facturation supplémentaire jusqu’à l’ouverture de la session de formation concernée, Toute demande de remplacement devra être adressée par écrit.<br>
                    <br>
                    <span style="text-decoration:underline">Conditions d’annulation et de report</span><br>
                    Toute annulation par le Client doit être communiquée par écrit.<br>
                    Pour toute annulation, moins de 10 jours francs ouvrables avant le début de la formation, 30% du montant de la session formation restera immédiatement exigible à titre d’indemnité forfaitaire.<br>
                    Toutefois, une possibilité de report est offerte au Client dans les 6 mois et l’indemnité sera affectée au coût de cette nouvelle session décidée d’un commun accord entre Demos et le Client.<br>
                    <br>
                    <h4 class="custom-font">FORMATIONS E-LEARNING</h4>
                    Demos accorde au Client une licence d’utilisation non exclusive, incessible et non transférable de ses Modules figurant à la commande. Les factures sont émises à la commande.<br>
                    <br>
                    <span style="text-decoration:underline">Mise à disposition des Modules</span><br>
                    L’ensemble des Modules, objet de la commande, sera mis à la disposition du Client, dans un portail e-learning, après acceptation de la commande.<br>
                    <br>
                    <span style="text-decoration:underline">Accès aux Modules</span><br>
                    L’accès aux Modules est géré par la plateforme e-learning de Demos.<br>
                    Un identifiant et un mot de passe sont communiqués au Client pour chacun des Apprenants sur la base des informations fournies par le Client (nom, prénom, e-mail).<br>
                    L’identifiant et le mot de passe sont confidentiels, personnels, incessibles et intransmissibles.<br>
                    <br>
                    <span style="text-decoration:underline">Responsabilité</span><br>
                    Le Client est responsable de la gestion et de la conservation des identifiants et mots de passe. En conséquence, il appartient au Client de mettre en oeuvre toutes mesures de précaution nécessaires à leur protection et à leur conservation. Le Client est responsable des conséquences de leur utilisation.<br>
                    Demos ne pourra en aucun cas être tenue pour responsable de toute utilisation frauduleuse de l’identifiant et du mot de passe du Client.<br>
                    Le Client s’engage à informer Demos de toute utilisation frauduleuse de l’identifiant et mot de passe dès qu’il en a connaissance.<br>
                    <br>
                    <span style="text-decoration:underline">Durée de l’accès aux Modules</span><br>
                    La commande prend effet à compter de la réception par Demos de l’acceptation par le Client de la commande.<br>
                    Le Client dispose d’un délai spécifié dans la commande ou à défaut d’un délai de 3 mois à compter de la livraison des Modules pour consommer les licences d’utilisation des Modules. Passé le délai spécifié dans la commande ou à défaut le délai de 3 mois à compter de la livraison de Modules ou en cas de consommation de l’intégralité des licences, la(les) licence(s) d’utilisation consentie au Client cessera(ont) immédiatement et le Client devra effectuer une autre commande.<br>
                    <br>
                    <span style="text-decoration:underline">Service Associés<br>
                    </span>L’acquisition de Licences Demos e-learning via la Plateforme Demos comprend les services suivants :<br>
                    - Mise en ligne du Campus Client.<br>
                    - Inscription des Apprenants.<br>
                    - Assistance technique des Apprenants par e-mail.<br>
                    - Hébergement des données de formation par Demos.<br>
                    - Maintenance corrective et évolutive.<br>
                    - Reporting.<br>
                    <br>
                    <h4 class="custom-font">PRIX ET REGLEMENTS</h4>
                    Tous nos prix sont indiqués en euros et hors taxes. Ils sont à majorer de la TVA au taux en vigueur. Toute formation commencée est due en entier.<br>
                    Les factures sont payables en euros, à 30 jours date de facture, sans escompte et à l’ordre de Demos SA.<br>
                    Toute somme non payée à l’échéance donnera lieu au paiement par le Client de pénalités de retard au taux d’intérêt appliqué par la Banque centrale européenne à son opération de refinancement la plus récente majoré de 10 points de pourcentage.<br>
                    Ces pénalités sont exigibles de plein droit, dès réception de l’avis informant le Client qu’elles ont été portées à son débit.<br>
                    Outre les pénalités constatées en cas de retard de paiement, le Client sera redevable d’une indemnité forfaitaire de 40€ pour frais de recouvrement conformément aux articles L441-6 c. com. et D. 441-5 c. com. Demos se réserve néanmoins le droit de réclamer une indemnisation complémentaire, sur justification, lorsque les frais réellement exposés sont supérieurs à ce montant.<br>
                    <br>
                    <h4 class="custom-font">REGLEMENT PAR UN OPCA</h4>
                    Si le Client souhaite que le règlement soit émis par l’OPCA dont il dépend, il lui appartient :<br>
                    - de faire une demande de prise en charge avant le début de la formation et de s’assurer de la bonne fin de cette demande ;<br>
                    - de l’indiquer explicitement sur son bulletin d’inscription ou sur son bon de commande ;<br>
                    - de s’assurer de la bonne fin du paiement par l’OPCA qu’il aura désigné.<br>
                    Si l’OPCA ne prend en charge que partiellement le coût de la formation, le reliquat sera facturé au Client.<br>
                    Si Demos n’a pas reçu la prise en charge de l’OPCA au 1er jour de la formation, le Client sera facturé de l’intégralité du coût du stage.<br>
                    En cas de non-paiement par l’OPCA, pour quelque motif que ce soit, le Client sera redevable de l’intégralité du coût de la formation et sera facturé du montant correspondant.<br>
                    <br>
                    <h4 class="custom-font">REFUS DE COMMANDE</h4>
                    Dans le cas où un Client passerait une commande à Demos, sans avoir procédé au paiement de la (des) commande(s) précédente(s), Demos pourra refuser d’honorer la commande et de délivrer les formations concernées, sans que le Client puisse prétendre à une quelconque indemnité, pour quelque raison que ce soit.<br>
                    <br>
                    <h4 class="custom-font">INFORMATIQUE ET LIBERTES</h4>
                    Le Client est informé que les informations à caractère personnel qui sont communiquées à Demos en application et dans l’exécution des commandes et/ou ventes pourront être communiquées aux partenaires contractuels de Demos pour les besoins desdites commandes.<br>
                    Conformément à la loi n°78-17 du 6 janvier 1978, dite Loi Informatique et Libertés, mise à jour par la loi du 6 août 2004, le Client dispose d’un droit d’accès, de rectification et d’opposition aux données personnelles le concernant. Ce droit est exerçable en faisant une demande par e-mail ou par courrier adressé à Demos.<br>
                    <br>
                    <h4 class="custom-font">COMMUNICATION</h4>
                    Le Client autorise expressément Demos et ses filiales à mentionner son nom, son logo et à faire mention à titre de références de la souscription à une commande et de toute opération découlant de son application dans l’ensemble de leurs documents commerciaux.<br>
                    <br>
                    <h4 class="custom-font">RENONCIATION</h4>
                    Le fait pour Demos de ne pas se prévaloir à un moment donné de l’une quelconque des clauses des présentes, ne peut valoir renonciation à se prévaloir ultérieurement de ces mêmes clauses.<br>
                    <br>
                    <h4 class="custom-font">LOI APPLICABLE</h4>
                    Les Conditions Générales et tous les rapports entre Demos et ses Clients relèvent de la Loi française.<br>
                    <br>
                    <h4 class="custom-font">ATTRIBUTION DE COMPETENCES</h4>
                    Tous litiges qui ne pourraient être réglés à l’amiable seront de la COMPETENCE EXCLUSIVE DU TRIBUNAL DE COMMERCE DE PARIS quel que soit le siège ou la résidence du Client, nonobstant pluralité de défendeurs ou appel en garantie.<br>
                    Cette clause attributive de compétence ne s’appliquera pas au cas de litige avec un Client non professionnel pour lequel les règles légales de compétence matérielle et géographique s’appliqueront. La présente clause est stipulée dans l’intérêt de la société Demos qui se réserve le droit d’y renoncer si bon lui semble.<br>
                    <br>
                    <h4 class="custom-font">ELECTION DE DOMICILE</h4>
                    L’élection de domicile est faite par Demos à son siège social au 1, Parvis de la Défense – Paris La Défense - 92 000 Nanterre​.<br><div><br></div>
                    <div><br></div>
                    <div><br></div>
                           <div>Pour les Conditions Générales de ventes "dates de sessions à la carte", <a href="/Pages/cgv-choix-session.aspx">cliquez ici​</a></div></div>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <!-- jQuery -->
    <script src="<?= $this->assetUrl('js/jquery.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
    
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="<?= $this->assetUrl('js/classie.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/cbpAnimatedHeader.js') ?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?= $this->assetUrl('js/jqBootstrapValidation.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/contact_me.js') ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= $this->assetUrl('js/agency.js') ?>"></script>

    <!-- main.js -->
    <script src="<?= $this->assetUrl('js/main.js') ?>"></script>

    <!-- FancyBox -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
	
</body>
</html>