<!DOCTYPE html>
<!--[if IE 8]><html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]><html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><html lang="en"><![endif]-->

<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Développeur Front-end - Aurélie Rigouste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <!-- @todo: fill with your company info or remove -->
    <meta name="description" content="Développeur Front-end à Toulouse, adore le thé, les Bugdroids & la joie de vivre !">
    <meta name="author" content="Aurélie Rigouste">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="plugins/flexslider/flexslider.css" rel="stylesheet">

    <!-- Theme style -->
    <link href="css/theme-style.min.css" rel="stylesheet">

    <!--Your custom colour override - a starter template/example for overriding theme colours -->
    <link href="css/alternative-colour.css" rel="stylesheet">

    <!-- Put all your custom code/overrides here -->
    <link href="css/custom-style.css" rel="stylesheet">

    <!-- HTML5 shiv & respond.js for IE6-8 support of HTML5 elements & media queries -->
    <!--[if lt IE 9]>
    <script src="plugins/html5shiv/dist/html5shiv.js"></script>
    <script src="plugins/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons - @todo: fill with your icons or remove -->
    <link rel="shortcut icon" href="img/icons/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
    <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Condiment' rel='stylesheet' type='text/css'>

    <!--Retina.js plugin - @see: http://retinajs.com/-->
    <script src="plugins/retina/js/retina-1.1.0.min.js"></script>

    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-48388384-1', 'aurelierigouste.me');
    ga('send', 'pageview');
    </script>
</head>

<body class="has-navbar-fixed-top page-index">

    <!-- @region: Navigation -->
    <div id="navigation" class="wrapper"> 
        <!-- Branding & Navigation --> 
        <!--Main Navigation-->
        <div class="navbar navbar-fixed-top">
            <div class="container"> 

                <!--branding-->
                <div class="navbar-brand"> 
                    <!-- Logo added with CSS -->
                    <h1><a href="#content">Développeur Front-end</a></h1>
                </div>

                <!--mobile collapse menu button--> 
                <a class="mobile-toggle-trigger">
                    <div class="toggle-icon">
                        <span class="icon-bar first"></span>
                        <span class="icon-bar second"></span>
                        <span class="icon-bar third"></span>
                    </div>
                </a> 

                <!--scroll mobile navigation--> 
                    <!--<a class="mobile-toggle-trigger scroll-nav" data-js="scroll-show">
                        <div class="toggle-icon">
                            <span class="icon-bar first"></span>
                            <span class="icon-bar second"></span>
                            <span class="icon-bar third"></span>
                        </div>
                    </a> -->

                    <!--everything within this div is collapsed on mobile-->
                    <div class="mobile-toggle"> 
                        <!--main navigation-->
                        <ul class="nav" id="main-menu">
                            <li><a href="#about">A propos</a></li>
                            <li><a href="#work">Projets</a></li>
                            <li><a href="#services">Compétences</a></li>
                            <li><a href="#experience">Expérience</a></li>
                            <li><a href="#contact" class="stamp">Contact&nbsp;</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse --> 
                </div>
            </div>
        </div>

        <!-- @region: Content --> 
        <!--scroll-section class must be added to all scrollable sections-->
        <div id="content">
            <section class="scroll-section about block primary" id="about"> 
                <!-- About text & photo -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 photo"> <img src="img/misc/profile.png" alt="Aurélie Rigouste, développeur web front, intégrateur web à Toulouse" class="img-circle img-responsive pull-center" /> </div>
                        <div class="col-sm-9 col-md-9 details">
                            <h2 class="primary-focus">Aurélie Rigouste</h2>
                            <h3 class="secondary-focus">Développeur Front-end, j'adore le thé, les Bugdroids & la joie de vivre !</h3>
                            <p>Motivée, rigoureuse, organisée et prête à collaborer et travailler avec vous !</p>
                            <div class="margin-top"><a href="#services" class="btn btn-lg btn-primary-grad btn-know-more"><span>En savoir plus</span></a></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Clients carousel -->
            <div class="clients block">
                <div class="container">
                    <div class="row"> 
                        <!--You must set data-item-width="250" data-item-margin="70" on the flexslider-carousel div
                	    data-item-width = width of each item
                	    data-item-margin = horizontal margins on items, relates to your css ie. margin: 0 35px; results in data-item-margin="70" (x2 the horizontal margin)-->
                        <div class="flexslider-carousel" data-item-width="250" data-item-margin="0">
                            <div class="items">
                                <div class="item">
                                    <span class="skill clearfix"><img src="img/clients/css.png" alt="CSS3 - 4/5" class="img-responsive" /></span>
                                    <div class="rating">
                                        <span>★</span><span>★</span><span>★</span><span>★</span><span class="empty">☆</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="skill clearfix"><img src="img/clients/responsive.png" alt="Adaptation responsive - 4/5" class="img-responsive" /></span>
                                    <div class="rating">
                                        <span>★</span><span>★</span><span>★</span><span>★</span><span class="empty">☆</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="skill clearfix"><img src="img/clients/html.png" alt="HTML5 - 4/5" class="img-responsive" /></span>
                                    <div class="rating">
                                        <span>★</span><span>★</span><span>★</span><span>★</span><span class="empty">☆</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="skill clearfix"><img src="img/clients/bootstrap.png" alt="Twitter Bootstrap - 4/5" class="img-responsive" /></span>
                                    <div class="rating">
                                        <span>★</span><span>★</span><span>★</span><span>★</span><span class="empty">☆</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="skill clearfix"><img src="img/clients/less.png" alt="Less - 4/5" class="img-responsive" /></span>
                                    <div class="rating">
                                        <span>★</span><span>★</span><span>★</span><span>★</span><span class="empty">☆</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="skill clearfix"><img src="img/clients/trello.png" alt="Trello - 4/5" class="img-responsive" /></span>
                                    <div class="rating">
                                        <span>★</span><span>★</span><span>★</span><span>★</span><span class="empty">☆</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="skill clearfix"><img src="img/clients/jquery.png" alt="jQuery - 3/5" class="img-responsive" /></span>
                                    <div class="rating">
                                        <span>★</span><span>★</span><span>★</span><span class="empty">☆</span><span class="empty">☆</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="skill clearfix"><img src="img/clients/drupal.png" alt="Drupal - 2/5" class="img-responsive" /></span>
                                    <div class="rating">
                                        <span>★</span><span>★</span><span class="empty">☆</span><span class="empty">☆</span><span class="empty">☆</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="skill clearfix"><img src="img/clients/git.png" alt="Git - 2/5" class="img-responsive" /></span>
                                    <div class="rating">
                                        <span>★</span><span>★</span><span class="empty">☆</span><span class="empty">☆</span><span class="empty">☆</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="skill clearfix"><img src="img/clients/php.png" alt="PHP - 1/5" class="img-responsive" /></span>
                                    <div class="rating">
                                        <span>★</span><span class="empty">☆</span><span class="empty">☆</span><span class="empty">☆</span><span class="empty">☆</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Work-->
            <section class="scroll-section work block" id="work">
                <div class="container">
                    <h2>Projets</h2>
                    <!--Featured item-->
                    <section class="flexslider-wrapper">
                        <div class="flexslider" id="full-view" data-slidernav="#work-items" data-transition="slide" data-autostartoff=true>
                            <div class="slides">
                                <div class="slide row" data-thumb="img/showcase/thumbs/project11.jpg">
                                    <div class="col-md-8"><img src="img/nothing.png" data-js="unveil" data-src="img/showcase/full/project11_large.jpg" data-src-retina="img/showcase/full/project11_large@2x.jpg" alt="Project image"  class="img-responsive" /></div>
                                    <div class="col-md-4">
                                        <time class="project-date">Avril 2014</time>
                                        <h3 class="title">Réalisation du site de la startup Medinbox</h3>
                                        <p>Site développé via le CMS Automne. Travail hors grille sur l'accueil pour pouvoir s'adapter à du full screen.</p>
                                        <h4>Outils et Technos</h4>
                                        <ul class="nice-list">
                                            <li>HTML5</li>
                                            <li>CSS3</li>
                                            <li>jQuery</li>
                                            <li>Adaptation responsive</li>
                                        </ul>
                                        <a href="http://www.medinbox.com" class="btn btn-primary">Voir le site en ligne <i class="fa fa-globe"></i></a> 
                                    </div>
                                </div>
                                <div class="slide row" data-thumb="img/showcase/thumbs/project3.jpg">
                                    <div class="col-md-8"><img src="img/nothing.png" data-js="unveil" data-src="img/showcase/full/project3_large.jpg" data-src-retina="img/showcase/full/project3_large@2x.jpg" alt="Project image"  class="img-responsive" /></div>
                                    <div class="col-md-4">
                                        <time class="project-date">Janvier 2014</time>
                                        <h3 class="title">Refonte du site de Villas et Maisons de France</h3>
                                        <p>Site développé via le CMS Automne. Important travail d'adaptation responsive du fait de plusieurs structures de pages différentes.</p>
                                        <h4>Outils et Technos</h4>
                                        <ul class="nice-list">
                                            <li>HTML5</li>
                                            <li>CSS3</li>
                                            <li>jQuery</li>
                                            <li>Adaptation responsive</li>
                                        </ul>
                                        <a href="http://www.vmfrance.com" class="btn btn-primary">Voir le site en ligne <i class="fa fa-globe"></i></a> 
                                    </div>
                                </div>
                                <div class="slide row" data-thumb="img/showcase/thumbs/project8.jpg">
                                    <div class="col-md-8"><img src="img/nothing.png" data-js="unveil" data-src="img/showcase/full/project8_large.jpg" data-src-retina="img/showcase/full/project8_large@2x.jpg" alt="Project image"  class="img-responsive" /></div>
                                    <div class="col-md-4">
                                        <time class="project-date">Janvier 2013</time>
                                        <h3 class="title">Création du site du Conseil général de l'Aveyron</h3>
                                        <p>Intégration du site via le CMS Drupal 7. Réflexion sur les CSS orientés objet pour gérer simplement la segmentation par couleurs des rubriques.</p>
                                        <h4>Outils et Technos</h4>
                                        <ul class="nice-list">
                                            <li>Drupal 7</li>
                                            <li>HTML5</li>
                                            <li>CSS3</li>
                                            <li>jQuery</li>
                                            <li>Adaptation responsive</li>
                                        </ul>
                                        <a href="#" class="btn btn-primary">Voir le site en ligne <i class="fa fa-globe"></i></a> 
                                    </div>
                                </div>
                                <div class="slide row" data-thumb="img/showcase/thumbs/project9.jpg">
                                    <div class="col-md-8"><img src="img/nothing.png" data-js="unveil" data-src="img/showcase/full/project9_large.jpg" data-src-retina="img/showcase/full/project9_large@2x.jpg" alt="Project image"  class="img-responsive" /></div>
                                    <div class="col-md-4">
                                        <time class="project-date">Janvier 2014</time>
                                        <h3 class="title">Création du site School Mouv</h3>
                                        <p>Intégration du site via le CMS Drupal 7. Adaptation responsive et travail ergonomique sur l’affichage des cours dans les profils des inscrits.</p>
                                        <h4>Outils et Technos</h4>
                                        <ul class="nice-list">
                                            <li>Drupal 7</li>
                                            <li>HTML5</li>
                                            <li>CSS3</li>
                                            <li>jQuery</li>
                                            <li>Adaptation responsive</li>
                                        </ul>
                                        <a href="#" class="btn btn-primary">Voir le site en ligne <i class="fa fa-globe"></i></a> 
                                    </div>
                                </div>
                                <div class="slide row" data-thumb="img/showcase/thumbs/project2.jpg">
                                    <div class="col-md-8"><img src="img/nothing.png" data-js="unveil" data-src="img/showcase/full/project2_large.jpg" data-src-retina="img/showcase/full/project2_large@2x.jpg" alt="Project image"  class="img-responsive" /></div>
                                    <div class="col-md-4">
                                        <time class="project-date">Octobre 2013</time>
                                        <h3 class="title">Refonte du site Imodeus</h3>
                                        <p>Site développé via le CMS Automne. Important travail d’adaptation responsive notamment sur les tableaux et résultats de recherche.</p>
                                        <p>Mise en place d'une Webapp utilisée en interne pour proposer des terrains à la vente avec géolocalisation et gestion des dossiers envoyés.</p>
                                        <ul class="nice-list">
                                            <li>HTML5</li>
                                            <li>CSS3</li>
                                            <li>jQuery</li>
                                            <li>Adaptation responsive</li>
                                        </ul>
                                        <a href="http://www.imodeus.com/" class="btn btn-primary">Voir le site en ligne <i class="fa fa-globe"></i></a> 
                                    </div>
                                </div>
                                <div class="slide row" data-thumb="img/showcase/thumbs/project5.jpg">
                                    <div class="col-md-8"><img src="img/nothing.png" data-js="unveil" data-src="img/showcase/full/project5_large.jpg" data-src-retina="img/showcase/full/project5_large@2x.jpg" alt="Project image"  class="img-responsive" /></div>
                                    <div class="col-md-4">
                                        <time class="project-date">Janvier 2014</time>
                                        <h3 class="title">Création du site BGH Experts et Conseils</h3>
                                        <p>Site développé via le CMS Automne. </p>
                                        <ul class="nice-list">
                                            <li>HTML5</li>
                                            <li>CSS3</li>
                                            <li>jQuery</li>
                                            <li>Adaptation responsive</li>
                                        </ul>
                                        <a href="http://www.bgh.fr/" class="btn btn-primary">Voir le site en ligne <i class="fa fa-globe"></i></a> 
                                    </div>
                                </div>
                                <!--<div class="slide row" data-thumb="img/showcase/thumbs/project4.jpg">
                                    <div class="col-md-8"><img src="img/nothing.png" data-js="unveil" data-src="img/showcase/full/project4_large.jpg" data-src-retina="img/showcase/full/project4_large@2x.jpg" alt="Project image"  class="img-responsive" /></div>
                                    <div class="col-md-4">
                                        <p>Mars 2012</p>
                                        <h3 class="title">Logement Direct</h3>
                                        <p>Adipiscing amet ridiculus magna elit scelerisque in? In ut. Aliquam, sed non, nascetur pellentesque tincidunt amet, sit placerat, massa facilisis mattis, sed mauris non nec pellentesque pid egestas et mid, porta mus, tincidunt?</p>
                                        <a href="http://www.logementdirect.fr/" class="btn btn-primary">Voir le site en ligne <i class="fa fa-globe"></i></a> 
                                    </div>
                                </div>-->
                                <div class="slide row" data-thumb="img/showcase/thumbs/project1.jpg">
                                    <div class="col-md-8"><img src="img/nothing.png" data-js="unveil" data-src="img/showcase/full/project1_large.jpg" data-src-retina="img/showcase/full/project1_large@2x.jpg" alt="Project image"  class="img-responsive" /></div>
                                    <div class="col-md-4">
                                        <time class="project-date">Avril 2013</time>
                                        <h3 class="title">Création du site GTP - From gene to protein</h3>
                                        <p>Site multilingue réalisé via le CMS Automne.</p>
                                        <ul class="nice-list">
                                            <li>HTML5</li>
                                            <li>CSS3</li>
                                            <li>jQuery</li>
                                            <li>Adaptation responsive</li>
                                        </ul>
                                        <a href="http://www.gtptech.com/" class="btn btn-primary">Voir le site en ligne <i class="fa fa-globe"></i></a> 
                                    </div>
                                </div>
                                <div class="slide row" data-thumb="img/showcase/thumbs/project10.jpg">
                                    <div class="col-md-8"><img src="img/nothing.png" data-js="unveil" data-src="img/showcase/full/project10_large.jpg" data-src-retina="img/showcase/full/project10_large@2x.jpg" alt="Project image"  class="img-responsive" /></div>
                                    <div class="col-md-4">
                                        <time class="project-date">Novembre 2013</time>
                                        <h3 class="title">DAFPIC</h3>
                                        <p>Site développé via le CMS Automne. Intégration du site avec adaptation responsive et contrainte importante au niveau de la charte (Respect charte éducation nationale).</p>
                                        <ul class="nice-list">
                                            <li>HTML5</li>
                                            <li>CSS3</li>
                                            <li>jQuery</li>
                                            <li>Adaptation responsive</li>
                                        </ul>
                                        <a href="#" class="btn btn-primary">Voir le site en ligne <i class="fa fa-globe"></i></a> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Projects pager-->
                        <ul class="items" id="work-items">
                            <li class="item pull-center">
                                <a class="item-link" href="img/showcase/full/project11_large.jpg">
                                    <img src="img/nothing.png" data-js="unveil-auto" data-src="img/showcase/thumbs/project11.jpg" data-src-retina="img/showcase/thumbs/project11@2x.jpg" alt="Project 3 image" title="Click to view details" />
                                    <div class="info">
                                        <div class="mask">
                                            <span>Medinbox</span>
                                        </div>
                                    </div>
                                </a> 
                            </li>
                            <li class="item pull-center">
                                <a class="item-link" href="img/showcase/full/project3_large.jpg">
                                    <img src="img/nothing.png" data-js="unveil-auto" data-src="img/showcase/thumbs/project3.jpg" data-src-retina="img/showcase/thumbs/project3@2x.jpg" alt="Project 3 image" title="Click to view details" />
                                    <div class="info">
                                        <div class="mask blue">
                                            <span>Villas et Maisons de France</span>
                                        </div>
                                    </div>
                                </a> 
                            </li>
                            <li class="item pull-center"> 
                                <a class="item-link" href="img/showcase/full/project8_large.jpg">
                                    <img src="img/nothing.png" data-js="unveil-auto" data-src="img/showcase/thumbs/project8.jpg" data-src-retina="img/showcase/thumbs/project8@2x.jpg" alt="Project 8 image" title="Click to view details" /> 
                                    <div class="info">
                                        <div class="mask">
                                            <span>Conseil général de l'Aveyron</span>
                                        </div>
                                    </div>
                                </a> 
                            </li>
                            <li class="item pull-center"> 
                                <a class="item-link" href="img/showcase/full/project9_large.jpg">
                                    <img src="img/nothing.png" data-js="unveil-auto" data-src="img/showcase/thumbs/project9.jpg" data-src-retina="img/showcase/thumbs/project9@2x.jpg" alt="Project 9 image" title="Click to view details" /> 
                                    <div class="info">
                                        <div class="mask blue">
                                            <span>SchoolMouv</span>
                                        </div>
                                    </div>
                                </a> 
                            </li>
                            <li class="item pull-center"> 
                                <a class="item-link" href="img/showcase/full/project2_large.jpg">
                                    <img src="img/nothing.png" data-js="unveil-auto" data-src="img/showcase/thumbs/project2.jpg" data-src-retina="img/showcase/thumbs/project2@2x.jpg" alt="Project 2 image" title="Click to view details" /> 
                                    <div class="info">
                                        <div class="mask">
                                            <span>Imodeus</span>
                                        </div>
                                    </div>
                                </a> 
                            </li>
                            <li class="item pull-center"> 
                                <a class="item-link" href="img/showcase/full/project5_large.jpg">
                                    <img src="img/nothing.png" data-js="unveil-auto" data-src="img/showcase/thumbs/project5.jpg" data-src-retina="img/showcase/thumbs/project5@2x.jpg" alt="Project 5 image" title="Click to view details" /> 
                                    <div class="info">
                                        <div class="mask blue">
                                            <span>BGH Experts et Conseils</span>
                                        </div>
                                    </div>
                                </a> 
                            </li>
                            <!--<li class="item pull-center"> 
                                <a class="item-link" href="img/showcase/full/project4_large.jpg">
                                    <img src="img/nothing.png" data-js="unveil-auto" data-src="img/showcase/thumbs/project4.jpg" data-src-retina="img/showcase/thumbs/project4@2x.jpg" alt="Project 4 image" title="Click to view details" /> 
                                    <div class="info">
                                        <div class="mask">
                                            <span>Logement Direct</span>
                                        </div>
                                    </div>
                                </a> 
                            </li>-->
                            <li class="item pull-center"> 
                                <a class="item-link" href="img/showcase/full/project1_large.jpg">
                                    <img src="img/nothing.png" data-js="unveil-auto" data-src="img/showcase/thumbs/project1.jpg" data-src-retina="img/showcase/thumbs/project1@2x.jpg" alt="Project 1 image" title="Click to view details" />
                                    <div class="info">
                                        <div class="mask blue">
                                            <span>GTP Technology</span>
                                        </div>
                                    </div>
                                </a> 
                            </li>
                            <li class="item pull-center"> 
                                <a class="item-link" href="img/showcase/full/project10_large.jpg">
                                    <img src="img/nothing.png" data-js="unveil-auto" data-src="img/showcase/thumbs/project10.jpg" data-src-retina="img/showcase/thumbs/project10@2x.jpg" alt="Project 8 image" title="Click to view details" /> 
                                    <div class="info">
                                        <div class="mask">
                                            <span>DAFPIC</span>
                                        </div>
                                    </div>
                                </a> 
                            </li>
                        </ul>
                    </section>
                </div>
            </section>

            <!-- Skills & Services -->
            <section class="scroll-section services block gray" id="services">
                <div class="container">
                    <h2>Compétences</h2>
                    <div class="row">
                        <div class="col-sm-3 col-md-3 service">
                            <i class="service-html5 centered"></i>
                            <h3 class="bold">CSS3 & HTML5</h3>
                            <p>Parce que grâce à ces outils il est dorénavant possible de mettre en oeuvre de belles réalisations et animations sans forcément avoir recours à du Javascript...</p>
                        </div>
                        <div class="col-sm-3 col-md-3 service">
                            <i class="service-backend centered"></i>
                            <h3 class="bold">Multi-compatibilité</h3>
                            <p>Parce que ne pas faire de site mobile ou responsive ou ne pas adapter son site à un large éventail de navigateurs signifierait mettre à l'écrat de nombreux utilisateurs !</p>
                        </div>
                        <div class="col-sm-3 col-md-3 service">
                            <i class="service-drupal centered"></i>
                            <h3 class="bold">Thèmes Drupal</h3>
                            <p>Parce que l'outil a largement fait ses preuves et que la communauté est très active, Drupal est une valeur sûre et en constante évolution qui permet de progresser sans arrêt.</p>
                        </div>
                        <div class="col-sm-3 col-md-3 service">
                            <i class="service-agile centered"></i>
                            <h3 class="bold">Programmation</h3>
                            <p>Parce que cet aspect reste incontournable pour un développeur front que ce soit du Javascript ou encore du PHP, il faut au minimum pouvoir jouer avec...</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Experience Timeline -->
            <section class="scroll-section experience block" id="experience">
                <div class="container">
                    <h2>Expérience</h2>
                    <ul class="timeline">
                        <!--Year 1 - 2013-->
                        <li>
                            <h3 class="timeline-breaker">Aujourd'hui</h3>
                            <ul>
                                <li class="timeline-item highlight">
                                    <!--Images require class="timeline-item-photo", to float right add right class="timeline-item-photo right"--> 
                                    <img src="img/nothing.png" data-js="unveil-auto" data-src="img/timeline/ws.png" data-src-retina="img/timeline/ws@2x.png" class="timeline-item-photo img-bg-primary img-responsive" alt="timeline photo" />
                                    <h4 class="timeline-item-date">Octobre 2011 - aujourd'hui</h4>
                                    <h5 class="timeline-item-role">Développeur Web Front @ <a href="http://www.ws-interactive.fr/">WS Interactive</a></h5>
                                    <p class="timeline-item-description">Intégration via les CMS <b>Drupal</b> et Automne, <b>Adaptation responsive</b> des sites, <b>HTML5</b>, <b>CSS3</b>, <b>Jquery</b>, Utilisation de <b>Bootstrap et Less</b>, Debug et optimisation pour les navigateurs</p>
                                    <a href="#work" class="btn btn-xs btn-primary-light btn-square">Voir les projets</a>
                                </li>
                                <li class="timeline-item right highlight">
                                    <!--Images require class="timeline-item-photo", to float right add right class="timeline-item-photo right"--> 
                                    <img src="img/nothing.png" data-js="unveil-auto" data-src="img/timeline/monkees.png" data-src-retina="img/timeline/monkees@2x.png" class="timeline-item-photo img-bg-primary-light right img-responsive" alt="timeline photo" />
                                    <h4 class="timeline-item-date">Mai 2011 - Août 2011</h4>
                                    <h5 class="timeline-item-role">Stagiaire développement web mobile @ <a href="http://www.monkees.fr/">Monkees</a></h5>
                                    <ul class="timeline-item-description">
                                        <li>Site mobile (Drupal 6) : <b>détection des devices</b> et redirections</li>
                                        <li>Création d'une <b>web app</b> pour la gestion des présentations client sur iPad avec export pour consultation hors ligne</li>
                                    </ul>
                                </li>
                                <li class="timeline-item study">
                                    <!--Images require class="timeline-item-photo", to float right add right class="timeline-item-photo right"--> 
                                    <h4 class="timeline-item-date">Mars 2011 - Mai 2011</h4>
                                    <h5 class="timeline-item-role">Projet tuteuré dans le cadre de la Licence Professionnelle RTAI</h5>
                                    <p class="timeline-item-description">Réalisation d'un <b>générateur de QR code</b> en PHP et intégration du générateur dans un <b>site standard et mobile</b>.</p>
                                </li>
                                <li class="timeline-item right study overlap-off">
                                    <!--Images require class="timeline-item-photo", to float right add right class="timeline-item-photo right"--> 
                                    <h4 class="timeline-item-date">Septembre 2010 - Mai 2011</h4>
                                    <h5 class="timeline-item-role">Licence professionnelle Responable Technique d'Applications Internet<br/>@ <a href="http://www.rtai.fr/">Université Toulouse 1 Capitole</a></h5>
                                    <p class="timeline-item-description">Approfondissement des langages liés au web, HTML, CSS, Javascript, PHP</p>
                                </li>
                            </ul>
                        </li>

                        <!--Year 2 - 2012-->
                        <li>
                            <h3 class="timeline-breaker">2009</h3>
                            <ul>
                                <li class="timeline-item highlight">
                                    <!--Images require class="timeline-item-photo", to float right add right class="timeline-item-photo right"--> 
                                    <img src="img/nothing.png" data-js="unveil-auto" data-src="img/timeline/3wcom.png" data-src-retina="img/timeline/photo3@2x.png" class="timeline-item-photo img-bg-primary img-responsive" alt="timeline photo" />
                                    <h4 class="timeline-item-date">Juin 2009 - Août 2009</h4>
                                    <h5 class="timeline-item-role">Stagiaire développement web @ <a href="http://www.3wcom.com/">3WCOM</a></h5>
                                    <ul class="timeline-item-description">
                                        <li>Création d'une plate-forme de gestion et de réservations de chambres en ligne</li>
                                        <li>Utilisation de XHTML, CSS et PHP</li>
                                    </ul>
                                </li>
                                <li class="timeline-item right study">
                                    <!--Images require class="timeline-item-photo", to float right add right class="timeline-item-photo right"--> 
                                    <h4 class="timeline-item-date">Septembre 2008 - Juin 2009</h4>
                                    <h5 class="timeline-item-role">DUT Informatique @ <a href="http://iut.ups-tlse.fr/ITINI_61/0/fiche___formation/&RH=1220282327265">IUT Paul Sabatier</a></h5>
                                    <p class="timeline-item-description">DUT obtenu en année spéciale, bases du développement informatique HTML, CSS, PHP, Java, C/C++, Administration réseau</p>
                                </li>
                            </ul>
                        </li>

                        <!--Timeline end block-->
                        <li class="timeline-end">
                            <h5 class="timeline-breaker">Besoin de plus d'informations ?</h5>
                            <a href="#contact" class="btn btn-lg btn-primary-light btn-square btn-style">Contactez moi <i class="fa fa-envelope"></i></a> 
                            <a href="docs/aurelie-rigouste.pdf" class="btn btn-lg btn-primary btn-square btn-style">Téléchargez mon CV <i class="fa fa-download"></i></a> 
                        </li>
                    </ul>
                </div>
            </section>

            <!--Customer testimonial -->
            <section class="testimonials" id="testimonials"> 
                <!-- background image & overlay colour are separate layers to make colour changing easy -->
                <div class="bg-blurred">
                    <div class="filter light">
                        <div class="container">
                            <!--<h2>Travailler <b>pour</b> et <b>avec</b> vous...</h2>-->
                            <h2>Inspirations...</h2>
                            <ul class="row inspi">
                                <li class="col-sm-2 col-xs-4">
                                    <a class="twt-account" href="https://twitter.com/cssauthor" target="_blank">
                                        <img src="img/twt-accounts/cssauthor.png" alt="Compte Twitter de @cssauthor" />
                                        <span>@cssauthor</span>
                                    </a>
                                </li>
                                <li class="col-sm-2 col-xs-4">
                                    <a class="twt-account" href="https://twitter.com/codrops" target="_blank">
                                    <img src="img/twt-accounts/codrops.png" alt="Compte Twitter de @codrops" />
                                        <span>@codrops</span>
                                    </a>
                                </li>
                                <li class="col-sm-2 col-xs-4">
                                    <a class="twt-account" href="https://twitter.com/twbootstrap" target="_blank">
                                    <img src="img/twt-accounts/bootstrap.png" alt="Compte Twitter de @twbootstrap" />
                                        <span>@twbootstrap</span>
                                    </a>
                                </li>
                                <li class="col-sm-2 col-xs-4">
                                    <a class="twt-account" href="https://twitter.com/smashingmag" target="_blank">
                                    <img src="img/twt-accounts/smashingmag.png" alt="Compte Twitter de @smashingmag" />
                                        <span>@smashingmag</span>
                                    </a>
                                </li>
                                <li class="col-sm-2 col-xs-4">
                                <a class="twt-account" href="https://twitter.com/JoniTrythall" target="_blank">
                                <img src="img/twt-accounts/joni.png" alt="Compte Twitter de @JoniTrythall" />
                                        <span>@JoniTrythall</span>
                                    </a>
                                </li>
                                <li class="col-sm-2 col-xs-4">
                                    <a class="twt-account" href="https://twitter.com/HTeuMeuLeu" target="_blank">
                                    <img src="img/twt-accounts/hteumeuleu.png" alt="Compte Twitter de @HTeuMeuLeu" />
                                        <span>@HTeuMeuLeu</span>
                                    </a>
                                </li>
                            </ul>
                            <h2>... Curiosités</h2>
                            <ul class="row inspi">
                                <li class="col-sm-2 col-xs-4">
                                    <a class="twt-account" href="https://twitter.com/pompeurs" target="_blank">
                                    <img src="img/twt-accounts/pompage.png" alt="Compte Twitter de @pompeurs" />
                                        <span>@pompeurs</span>
                                    </a>
                                </li>
                                <li class="col-sm-2 col-xs-4">
                                    <a class="twt-account" href="https://twitter.com/Gamekult" target="_blank">
                                    <img src="img/twt-accounts/gamekult.png" alt="Compte Twitter de @Gamekult" />
                                        <span>@Gamekult</span>
                                    </a>
                                </li>
                                <li class="col-sm-2 col-xs-4">
                                    <a class="twt-account" href="https://twitter.com/JournalDuGeek" target="_blank">
                                    <img src="img/twt-accounts/jdgeek.png" alt="Compte Twitter de @JournalDuGeek" />
                                        <span>@JournalDuGeek</span>
                                    </a>
                                </li>
                                <li class="col-sm-2 col-xs-4">
                                    <a class="twt-account" href="https://twitter.com/Stromae" target="_blank">
                                    <img src="img/twt-accounts/stromae.png" alt="Compte Twitter de @Stromae" />
                                        <span>@Stromae</span>
                                    </a>
                                </li>
                                <li class="col-sm-2 col-xs-4">
                                    <a class="twt-account" href="https://twitter.com/Joe_Officiel" target="_blank">
                                    <img src="img/twt-accounts/joe.png" alt="Compte Twitter de @Joe_Officiel" />
                                        <span>@Joe_Officiel</span>
                                    </a>
                                </li>
                                <li class="col-sm-2 col-xs-4">
                                    <a class="twt-account" href="https://twitter.com/BlaBlaCar_FR" target="_blank">
                                    <img src="img/twt-accounts/blablacar.png" alt="Compte Twitter de @BlaBlaCar_FR" />
                                        <span>@BlaBlaCar_FR</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--<div class="block thin gray">
                    <div class="flexslider-wrapper container">
                        <div class="flexslider" data-transition="fade" data-directionnav=false>
                            <div class="slides">
                                <blockquote class="slide">
                                    <p> Couldn't be happier with the work carried out. <small>Charles Chaplin via <a href="#">Twitter</a></small> </p>
                                </blockquote>
                                <blockquote class="slide">
                                    <p> Great job, delivered on time & on budget! <small>Mike Rogers via <a href="#">Facebook</a></small> </p>
                                </blockquote>
                                <blockquote class="slide">
                                    <p> Our productivity & sales are up due to our new website, highly recommended! <small>Jim Jones</small> </p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>-->
            </section>

            <!--Contact form-->
            <section class="scroll-section contact block" id="contact">
                <div class="container">
                    <h2>Contact</h2>

                    <?php
                    if(isset($_POST) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message'])) {
                        $nom = $_POST['nom'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];
                        $antispam = $_POST['itsatrap'];
                        if(!empty($antispam)) {
                            echo "<div class='alert alert-warning'><i class='fa fa-bug'></i>&nbsp;&nbsp;Ouh le méchant spammeur !</div>";
                        }
                        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                            echo "<div class='alert alert-warning'><i class='fa fa-exclamation-triangle'></i>&nbsp;&nbsp;Veuillez saisir un email valide.</div>";
                        }
                        elseif(!empty($nom) && $nom != "Nom" && !empty($email) && $email != "Email" && !empty($message) && $message != "Message") {
                            $destinataire = 'aurelierigouste@gmail.com';
                            $sujet = 'Contact portfolio en ligne';
                            $msg = "Nouveau contact depuis mon portfolio :\n
                            Nom : $nom \n
                            Email : $email \n
                            Message : $message";
                            $entete = "From: $nom \n Reply-To: $email";
                            if(mail($destinataire, $sujet, $msg, $entete)) {
                                echo "<div class='alert alert-success'><i class='fa fa-thumbs-o-up '></i>&nbsp;&nbsp;Merci, votre message a bien été envoyé. Je vous répondrai sous peu.</div>";    
                            }
                            else {
                                echo "<div class='alert alert-warning'><i class='fa fa-exclamation-triangle'></i>&nbsp;&nbsp;Désolée, votre message n'a pas pu être envoyé. Veuillez essayer à nouveau.</div>";
                            }
                        }
                        else {
                            echo "<div class='alert alert-warning'><i class='fa fa-exclamation-triangle'></i>&nbsp;&nbsp;Désolée, votre message n'a pas pu être envoyé. Veuillez remplir tous les champs et essayer à nouveau.</div>";
                        }
                    }
                    ?>

                    <form id="contact-form" method="post" action="/#contact">
                        <div class="row">
                            <div class="col-md-5">
                                <span class="required">
                                    <input type="text" placeholder="Nom" class="input-primary" required name="nom">
                                    <i class="fa fa-asterisk"></i>
                                </span>
                                <span class="required">
                                    <input type="email" placeholder="Email" class="input-primary" required name="email">
                                    <i class="fa fa-asterisk"></i>
                                </span>
                            </div>
                            <div class="col-md-7">
                                <span class="required">
                                    <textarea rows="4" placeholder="Message" required name="message"></textarea>
                                    <i class="fa fa-asterisk"></i>
                                </span>
                            </div>
                        </div>
                        <input class="hidden-input" name="itsatrap" type="text" value="" />
                        <button type="submit" value="1" class="btn btn-lg btn-primary-light btn-square btn-send"></button>
                        <address>
                            <small>Adresse :</small><br />
                            Rue Albert Schweitzer - 31200 Toulouse, France<br />
                            <a href="https://maps.google.fr/maps?q=Rue+du+Docteur+Albert+Schweitzer,+Toulouse&hl=fr&ll=43.601527,1.461868&spn=0.213563,0.523567&sll=43.30543,1.244993&sspn=3.433625,8.377075&oq=rue+albert+schweitzer+&hnear=Rue+du+Docteur+Albert+Schweitzer,+Toulouse&t=m&z=12"><i class="fa fa-map-marker"></i>Voir sur la carte</a>
                        </address>
                    </form>
                </div>
            </section>
        </div>

        <!-- @region: Footer -->
        <footer id="footer">
            <div class="container">
                <div class="row-fluid pull-center">
                    <div class="social-media"> 
                        <a class="icon-effect twitter" href="https://twitter.com/or3lie">Twitter</a> 
                        <a class="icon-effect facebook" href="https://www.facebook.com/aurelie.rigouste">Facebook</a> 
                        <a class="icon-effect gplus" href="https://plus.google.com/104878528522294042976/posts">Google Plus</a> 
                        <a class="icon-effect linkedin" href="http://www.linkedin.com/pub/aur%C3%A9lie-rigouste/78/211/47b">LinkedIn</a> 
                    </div>
                    <p><a class="colour" data-colour="alternative">Changer la couleur du thème</a></p>
                    <!--@todo: replace with company copyright details-->
                    <p>Copyright 2013 &copy; <a href="http://themelize.me">aurelierigouste.me</a></p>
                </div>
            </div>
        </footer>

        <!--Scripts --> 
        <script src="js/jquery.min.js"></script> 

        <!--Bootstrap Javascript --> 
        <script src="js/bootstrap.min.js"></script> 

        <!--Plugins --> 
        <script src="plugins/flexslider/jquery.flexslider-min.js"></script> 
        <!--<script src="plugins/jPanelMenu/jquery.jpanelmenu.min.js"></script> -->
        <script src="plugins/enquire/enquire.js"></script> 
        <script src="plugins/onePageNav/jquery.scrollTo.min.js"></script> 
        <script src="plugins/onePageNav/jquery.nav.min.js"></script>
        <script src="plugins/unveil/jquery.unveil.min.js"></script> 

        <!--Custom scripts mainly used to trigger libraries --> 
        <script src="js/script.js"></script>
    </body>
    </html>