<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 🔹 SEO principal -->
    <title>Portfolio de Nathan CHAMPAGNE – Développeur Full Stack</title>
    <meta name="description"
        content="Découvrez le portfolio de Nathan CHAMPAGNE, développeur full stack passionné basé en Guadeloupe. Explorez mes projets, mes compétences et mes expériences en développement web et logiciel.">
    <meta name="keywords"
        content="Nathan Champagne, portfolio, développeur web, développeur full stack, Guadeloupe, projets, compétences, PHP, JavaScript, HTML, CSS, logiciel, MIAGE, BTS SIO">
    <meta name="author" content="Nathan Champagne">

    <!-- 🔹 Favicon -->
    <link rel="icon" type="image/png" href="images/LogoPF.png">

    <!-- 🔹 Open Graph (réseaux sociaux) -->
    <meta property="og:title" content="Portfolio de Nathan CHAMPAGNE – Développeur Full Stack">
    <meta property="og:description" content="Découvrez mes projets et compétences en développement web et logiciel.">
    <meta property="og:image" content="https://mrchampagne-myportfolio.alwaysdata.net/images/LogoPF.png">
    <meta property="og:url" content="https://mrchampagne-myportfolio.alwaysdata.net/">
    <meta property="og:type" content="website">

    <!-- 🔹 Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Portfolio de Nathan CHAMPAGNE – Développeur Full Stack">
    <meta name="twitter:description" content="Découvrez mes projets et compétences en développement web et logiciel.">
    <meta name="twitter:image" content="https://mrchampagne-myportfolio.alwaysdata.net/images/LogoPF.png">

    <!-- 🔹 Canonical (évite les duplications) -->
    <link rel="canonical" href="https://mrchampagne-myportfolio.alwaysdata.net/">


    <!-- Fichiers CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="color-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Fichier PHP pour la connexion à la base de données -->
    <link rel="stylesheet" href="connexionDB-PortFolio.php">
    <link rel="stylesheet" href="sendMessageToDB-PortFolio.php">

    <!-- Style Switcher -->
    <link rel="stylesheet" href="color-1.css" class="alternate-style" title="color-1" disabled>
    <link rel="stylesheet" href="color-2.css" class="alternate-style" title="color-2" disabled>
    <link rel="stylesheet" href="color-3.css" class="alternate-style" title="color-3" disabled>
    <link rel="stylesheet" href="color-4.css" class="alternate-style" title="color-4" disabled>
    <link rel="stylesheet" href="color-5.css" class="alternate-style" title="color-5" disabled>
    <link rel="stylesheet" href="style-switcher.css">
</head>

<body>
    <!-- Main Container Start -->
    <div class="main-container">

        <!-- Menu Start -->
        <div class="menu">
            <div class="logo">
                <a href="#"><span>Port</span>Folio</a>
            </div>
            <div class="nav-toggler">
                <span></span>
            </div>
            <ul class="nav">
                <li><a href="#Acceuil" class="active"><i class="fa fa-home"></i> Acceuil</a></li>
                <li><a href="#À propos"><i class="fa fa-user"></i> À propos</a></li>
                <li><a href="#Réalisations"><i class="fa fa-briefcase"></i> Réalisations</a></li>
                <li><a href="#Certifications"><i class="fa fa-list"></i> Certifications</a></li>
                <li><a href="#Veille Technologique"><i class="fa fa-cog"></i> Veille Technologique</a></li>
                <li><a href="#BTS SIO"><i class="fa fa-question-circle"></i>BTS SIO</a></li>
                <li><a href="#Contact"><i class="fa fa-comments"></i> Contact</a></li>
            </ul>
        </div>
        <!-- Menu End -->

        <!-- Main Content Start -->
        <div class="main-content">

            <!-- Acceuil Section Start -->
            <section class="home active section" id="Acceuil">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello">Bonjour, je m'appelle <span class="name">Nathan Champagne</span></h3>
                            <h3 class="my-profession">Je suis un <span class="typing">Étudiant en BTS SIO</span></h3>
                            <p>"Polyvalent, motivé et prêt à relever de nouveaux défis, je suis à la
                                recherche d'opportunités professionnelles enrichissantes où je pourrais mettre à
                                profit mes compétences et mon engagement..."</p>
                            <a href="#À propos" class="button more-about">En Savoir Plus</a>
                        </div>
                        <div class="home-img padd-15">
                            <img src="images/pp.jpg" alt="">
                        </div>
                    </div>
                </div>

                <!-- Footer Start -->
                <div class="footer">
                    <div id="button"></div>
                    <div id="container">
                        <ul class="nav">
                            <p>&copy; 2024 - Nathan CHAMPAGNE | Tous droits réservés</p>
                        </ul>
                    </div>
                </div>
                <!-- Footer End -->
            </section>
            <!-- Acceuil Section End -->

            <!-- À propos Section Start -->
            <section class="about section" id="À propos">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>À propos</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="about-text padd-15">
                                    <h3>Je suis Nathan Champagne, <span>Chef de Projet</span></h3>
                                    <p>...</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="personal-info padd-15">
                                    <div class="row">
                                        <div class="section-title padd-15">
                                            <h2>Mes Coordonnées</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="info-item padd-15">
                                            <p class="non-cliquable">Email : <span>nathancmp.971@gmail.com</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p class="non-cliquable">Téléphone : <span>+590 690 97 38 72</span></p>
                                        </div>
                                        <div class="info-item padd-15">
                                            <p class="non-cliquable">Adresse : <span>Petit-Bourg, Guadeloupe</span></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="buttons padd-15">
                                            <a href="images/CV professionnel.pdf" class="download-button">Télécharger
                                                ici<i class="fa fa-download"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills padd-15">
                                    <div class="row">
                                        <div class="section-title padd-15">
                                            <h2>Mes Compétences</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="skill-item padd-15">
                                            <h5>HTML5</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 65%;"></div>
                                                <div class="skill-percent">65%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>CSS</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 65%;"></div>
                                                <div class="skill-percent">65%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>Javascript</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 35%;"></div>
                                                <div class="skill-percent">35%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>Python</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 50%;"></div>
                                                <div class="skill-percent">50%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>C#</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 55%;"></div>
                                                <div class="skill-percent">55%</div>
                                            </div>
                                        </div>
                                        <div class="skill-item padd-15">
                                            <h5>PHP</h5>
                                            <div class="progress">
                                                <div class="progress-in" style="width: 45%;"></div>
                                                <div class="skill-percent">45%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="education padd-15">
                                    <div class="row">
                                        <div class="section-title padd-15">
                                            <h2>Formations</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!-- timeline items -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2024 (Actuellement)
                                                    </h3>
                                                    <h4 class="timeline-title">LGT Baimbridge | BTS SIO (Service
                                                        Informatique aux Organisations)</h4>
                                                    <p class="timeline-text">...</p>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2024 - 2023
                                                    </h3>
                                                    <h4 class="timeline-title">Université des Antilles | Licence
                                                        Informatique 1ère Année</h4>
                                                    <p class="timeline-text">...</p>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> 2023 - 2020 (Actuellement)
                                                    </h3>
                                                    <h4 class="timeline-title">LGT Droits de L'Homme | Baccalauréat
                                                        Générale</h4>
                                                    <p class="timeline-text">Spécialités Maths / NSI</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="experience padd-15">
                                    <div class="row">
                                        <div class="section-title padd-15">
                                            <h2>Expériences professionnelles</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="timeline-box padd-15">
                                            <div class="timeline shadow-dark">
                                                <!-- timeline items -->
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> Août 2024
                                                    </h3>
                                                    <h4 class="timeline-title">DOM MANUT |SUPER U BERGEVIN -
                                                        Manutentionnaire en qualité d'employé de rayon</h4>
                                                    <p class="timeline-text">...</p>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> Juillet 2024
                                                    </h3>
                                                    <h4 class="timeline-title">SRJE (Stage Régionale des Jeunes en
                                                        Entreprise) | SUPER U SAINT-JULES - Employé de rayon</h4>
                                                    <p class="timeline-text">...</p>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> Août 2023
                                                    </h3>
                                                    <h4 class="timeline-title">CHAMPABOIS | Manoeuvre Charpentier</h4>
                                                    <p class="timeline-text">...</p>
                                                </div>
                                                <div class="timeline-item">
                                                    <div class="circle-dot"></div>
                                                    <h3 class="timeline-date">
                                                        <i class="fa fa-calendar"></i> Juillet 2023
                                                    </h3>
                                                    <h4 class="timeline-title">Mairie de Petit-Bourg | Agent Polyvalent
                                                        en qualité d'Adjoint Technique</h4>
                                                    <p class="timeline-text">...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Start -->
                <div class="footer">
                    <div id="button"></div>
                    <div id="container">
                        <ul class="nav">
                            <p>&copy; 2024 - Nathan CHAMPAGNE | Tous droits réservés</p>
                        </ul>
                    </div>
                </div>
                <!-- Footer End -->
            </section>
            <!-- À propos Section End -->

            <!-- Réalisations Section Start -->
            <section class="section realisation" id="Réalisations">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Mes Réalisations</h2>
                        </div>
                        <div class="row">
                            <div class="realisation-heading padd-15">
                                <h2>Mes derniers projets: </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Réalisation item Start -->

                        <div class="realisation-item padd-15">
                            <div class="realisation-item-inner">
                                <div class="icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <h4>Voiti Nèf</h4>
                                <p>Site vitrine de vente de voitures</p>
                                <a href="Voiti_Nef/index.html" class="download-button"><i
                                        class="fas fa-hand-pointer fa-beat"></i>Y allez !</a>
                            </div>
                        </div>
                        <div class="realisation-item padd-15">
                            <div class="realisation-item-inner">
                                <div class="icon">
                                    <i class="fa fa-code"></i>
                                </div>
                                <h4>Projet Voyage Mexique</h4>
                                <p>...</p>
                                <a href="images/Projet Voyage Mexique.rar" class="download-button"><i
                                        class="fa fa-download"></i></a>
                            </div>
                        </div>

                        <div class="realisation-item padd-15">
                            <div class="realisation-item-inner">
                                <div class="icon">
                                    <i class="fa fa-laptop-code"></i>
                                </div>
                                <h4>Projet No touch</h4>
                                <p>...</p>
                                <a href="images/No Touch Game.rar" class="download-button"><i
                                        class="fa fa-download"></i></a>
                            </div>
                        </div>

                        <div class="realisation-item padd-15">
                            <div class="realisation-item-inner">
                                <div class="icon">
                                    <i class="fa fa-laptop-code"></i>
                                </div>
                                <h4>Projet Ti pwen Ti kwa</h4>
                                <p>...</p>
                                <a href="images/Ti-pwen-Ti-kwa.rar" class="download-button"><i
                                        class="fa fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Start -->
                <div class="footer">
                    <div id="button"></div>
                    <div id="container">
                        <ul class="nav">
                            <p>&copy; 2024 - Nathan CHAMPAGNE | Tous droits réservés</p>
                        </ul>
                    </div>
                </div>
                <!-- Footer End -->
            </section>
            <!-- Réalisations Section End -->

            <!-- Certifications Section Start -->
            <section class="certification section" id="Certifications">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Mes Certifications</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="certification-heading padd-15">
                            <h2>Obtenues :</h2>
                        </div>
                        <div class="row">
                            <!-- Certification item Start -->
                            <div class="certification-item padd-15">
                                <div class="certification-item-inner">
                                    <div class="certification-img padd-15">
                                        <img src="images/computer-hardware-basics.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="certification-heading padd-15">
                            <h2>En cours :</h2>
                        </div>
                        <div class="certification-item padd-15">
                            <div class="certification-item-inner">
                                <div class="certification-img padd-15">
                                    <img src="images/microsoft-azure-fundamentals-describe-cloud-concepts.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="certification-item padd-15">
                            <div class="certification-item-inner">
                                <div class="certification-img padd-15">
                                    <img src="images/fe754160-54a9-42a9-a068-d4184d21c0af.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="certification-item padd-15">
                            <div class="certification-item-inner">
                                <div class="certification-img padd-15">
                                    <img src="images/0988c7d8-59f9-4abf-b8c6-4f188c241255.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="certification-heading padd-15">
                            <h2>À venir :</h2>
                        </div>
                        <div class="certification-item padd-15">
                            <div class="certification-item-inner">
                                <div class="certification-img padd-15">
                                    <img src="images/linux.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="certification-item padd-15">
                            <div class="certification-item-inner">
                                <div class="certification-img padd-15">
                                    <img src="images/f6545503-e012-487a-be0c-7425e3bff108.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="certification-item padd-15">
                            <div class="certification-item-inner">
                                <div class="certification-img padd-15">
                                    <img src="images/python_essentials_1_50.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="certification-item padd-15">
                            <div class="certification-item-inner">
                                <div class="certification-img padd-15">
                                    <img src="images/javascript 1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="certification-item padd-15">
                            <div class="certification-item-inner">
                                <div class="certification-img padd-15">
                                    <img src="images/javascript 2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Start -->
                <div class="footer">
                    <div id="button"></div>
                    <div id="container">
                        <ul class="nav">
                            <p>&copy; 2024 - Nathan CHAMPAGNE | Tous droits réservés</p>
                        </ul>
                    </div>
                </div>
                <!-- Footer End -->
            </section>
            <!-- Certifications Section End -->

            <!-- Veille Technologique Start -->
            <section class="certification section" id="Veille Technologique">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Veille Technologique</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="certification-heading padd-15">
                            <h2>Mes outils :</h2>
                        </div>
                        <div class="row">
                            <!-- Certification item Start -->
                            <div class="certification-item padd-15">
                                <div class="certification-item-inner">
                                    <div class="certification-img padd-15">
                                        <img src="images/Twitter-new-logo-1.jpeg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="certification-item padd-15">
                                <div class="certification-item-inner">
                                    <div class="certification-img padd-15">
                                        <img src="images/Nvidia_(logo).svg.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="certification-item padd-15">
                                <div class="certification-item-inner">
                                    <div class="certification-img padd-15">
                                        <img src="images/Feedly-logo.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="certification-item padd-15">
                                <div class="certification-item-inner">
                                    <div class="certification-img padd-15">
                                        <img src="images/unnamed.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="certification-item padd-15">
                                <div class="certification-item-inner">
                                    <div class="certification-img padd-15">
                                        <img src="images/6057996-logo-tiktok-sur-fond-transparent-gratuit-vectoriel.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Start -->
                <div class="footer">
                    <div id="button"></div>
                    <div id="container">
                        <ul class="nav">
                            <p>&copy; 2024 - Nathan CHAMPAGNE | Tous droits réservés</p>
                        </ul>
                    </div>
                </div>
                <!-- Footer End -->
            </section>
            <!-- Veille Technologique End -->

            <!-- BTS SIO Start -->
            <section class="about section" id="BTS SIO">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>le "BTS SIO", c'est quoi ?</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="section-title padd-15">
                                    <h2>Option SLAM (Solutions Logicielle et Applications Métiers)</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="timeline-box padd-15">
                                    <div class="timeline shadow-dark">
                                        <!-- timeline items -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i>Le BTS SIO option SLAM forme à des
                                                compétences dans 3 domaines d'activités:
                                            </h3>
                                            <h4 class="timeline-title">Support et mise à disposition des services
                                                informatiques: </h4>
                                            <p class="timeline-text"> L'étudiant(e) se forme pour répondre aux attentes
                                                des utilisateurs en assurant la disponibilité des services informatiques
                                                existants.
                                                Il(/elle) sera aussi en mesure de prendre en compte les besoins
                                                informatiques dans l'entreprise et d'accompagner la transformation
                                                numérique des services informatiques,
                                                tout en maintenant son employabilité. Il(/elle) acquiert ainsi les
                                                compétences pour gérer le patrimoine informatique, répondre aux
                                                incidents,
                                                développer la présence de l'entreprise sur le Web, organiser son propre
                                                développement professionnel tout en s’intégrant aux équipes pour
                                                travailler en mode projet.
                                            </p>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h4 class="timeline-title">Cybersécurité des services informatiques: </h4>
                                            <p class="timeline-text">l'étudiant(e) travaille à la cybersécurité et à
                                                l’analyse des risques encourus par les entreprises en tenant compte des
                                                dimensions techniques,
                                                organisationnelles ou encore juridiques. Il(/elle) obtient ainsi des
                                                compétences sur la protection des données et l'identité numérique de
                                                l'entreprise,
                                                la sécurisation des équipements et des usages des utilisateurs. Il ou
                                                elle participe à la cybersécurisation d'une solution applicative et de
                                                son développement.
                                            </p>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h4 class="timeline-title">Conception et développement d'applications: </h4>
                                            <p class="timeline-text">l'étudiant(e) participe à la conception, au
                                                développement, ainsi qu'au déploiement et à la maintenance des
                                                composants logiciels d'une solution applicative
                                                (Web, mobile, client…). Il(/elle) acquiert ainsi des compétences en
                                                conception et développement d'une solution applicative, en maintenance
                                                de celle-ci,
                                                mais aussi en bases de données, en gestion des données numériques et en
                                                gestion de version (git/forme logicielle).
                                            </p>
                                            <br>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i>(Source - onisep.fr)
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="section-title padd-15">
                                    <h2>Option SISR (Solutions d'Infrastructure, Systèmes et Réseaux)</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="timeline-box padd-15">
                                    <div class="timeline shadow-dark">
                                        <!-- timeline items -->
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i>Le BTS SIO option SISR forme à des
                                                compétences dans 3 domaines d'activités:
                                            </h3>
                                            <h4 class="timeline-title">Support et mise à disposition des services
                                                informatiques: </h4>
                                            <p class="timeline-text">L'étudiant(e) se forme pour répondre aux attentes
                                                des utilisateurs en assurant la disponibilité des services informatiques
                                                existants.
                                                Il(/elle) apprend à prendre en compte les besoins informatiques à
                                                accompagner la transformation numérique des services informatiques,
                                                tout en maintenant son employabilité. Il(/elle) acquiert ainsi des
                                                compétences pour gérer le patrimoine informatique, répondre aux
                                                incidents, développer la présence de l'entreprise sur le Web.
                                            </p>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h4 class="timeline-title">Cybersécurité des services informatiques: </h4>
                                            <p class="timeline-text">L'étudiant(e) est formé(e) à la cybersécurisation
                                                d'une infrastructure réseau, d'un système ou d'un service et à l'analyse
                                                des risques encourus par les entreprises en tenant compte des dimensions
                                                techniques,
                                                organisationnelles ou encore juridiques. Il(/elle) acquiert des
                                                compétences sur la protection des données et l'identité numérique de
                                                l'entreprise,
                                                la sécurisation des équipements et des usages des utilisateurs.
                                            </p>
                                        </div>
                                        <div class="timeline-item">
                                            <div class="circle-dot"></div>
                                            <h4 class="timeline-title">Administration des systèmes et des réseaux: </h4>
                                            <p class="timeline-text">L'étudiant(e) est formé(e) à l'administration des
                                                systèmes et du réseau.
                                                Il(/elle) acquiert les compétences pour modifier ou adapter les
                                                solutions d'infrastructure de réseau : concevoir une solution
                                                d'infrastructure réseau,
                                                l'installer, la tester et la déployer tout en assurant la qualité de
                                                service des équipements du réseau. L'étudiant(e) apprend aussi à
                                                administrer et superviser ce réseau.</p>
                                            <br>
                                            <h3 class="timeline-date">
                                                <i class="fa fa-calendar"></i>(Source - onisep.fr)
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Start -->
                <div class="footer">
                    <div id="button"></div>
                    <div id="container">
                        <ul class="nav">
                            <p>&copy; 2024 - Nathan CHAMPAGNE | Tous droits réservés</p>
                        </ul>
                    </div>
                </div>
                <!-- Footer End -->
            </section>
            <!-- BTS SIO End -->

            <!-- Contact Section Start -->
            <section class="contact section" id="Contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Contact</h2>
                        </div>
                    </div>
                    <h3 class="contact-title padd-15"> Des Questions ? Plus de renseignements ?</h3>
                    <h4 class="contact-sub-title padd-15"> JE SUIS À VOTRE DISPOSITION ! </h4>
                    <div class="row">
                        <!-- Contact info item Start -->
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Téléphone</h4>
                            <p class="non-cliquable">+590 690 97 38 72</p>
                        </div>
                        <div class="contact-info-item padd-15">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h4>Email</h4>
                            <p class="non-cliquable">nathancmp.971@gmail.com</p>
                        </div>
                        <!-- Contact info item End -->
                    </div>
                    <h3 class="contact-title padd-15">Vous souhaitez me contacter ? Envoyez-moi un mail !</h3>
                    <h4 class="contact-sub-title padd-15"> JE VOUS RÉPONDRAIS DANS LES PLUS BREF DÉLAIS !</h4>

                    <!-- Form Contact Start -->
                    <form action="sendMessageToDB-PortFolio.php" method="POST" class="contact-form padd-15"
                        id="contact-form">
                        <div class="row">
                            <div class="form-item col-6 padd-15">
                                <div class="form-group">
                                    <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                                </div>
                            </div>
                            <div class="form-item col-6 padd-15">
                                <div class="form-group">
                                    <input type="text" name="prenom" class="form-control" placeholder="Prénom" required>
                                </div>
                            </div>
                            <div class="form-item col-6 padd-15">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="form-item col-12 padd-15">
                                <div class="form-group">
                                    <input type="text" name="sujet" class="form-control" placeholder="Sujet" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-item col-12 padd-15">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Message"
                                        required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-item col-12 padd-15">
                                <button type="submit" class="button">Envoyer le message</button>
                            </div>
                        </div>
                        <!--</form>-->

                        <!-- Champs cachés -->
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_next" value="thankyou.html">
                        <input type="hidden" name="_autoresponse"
                            value="Merci pour votre message ! Je vous répondrai dans les plus brefs délais.">
                        <input type="hidden" name="_template" value="table">
                    </form>
                    <!-- Form Contact End -->

                    <?php
                    if (isset($_POST["message"])) {
                        $message = "Ce message a été envoyé via le formulaire de contact du site: 
                        https://mrchampagne-myportfolio.alwaysdata.net/

                        Nom : " . $_POST["name"] . "
                        Email: " . $_POST["email"] . " 
                        Message: " . $_POST["message"] . " ";

                        $retour = mail(
                            "mrchampagne-myportfolio@alwaysdata.net",
                            $_POST["subject"],
                            $message,
                            "From:contact@mrchampagne-myportfolio.alwaysdata.net" . "\r\n" . "Reply-to" . $_POST["email"]
                        );
                    }
                    ?>
                </div>

                <!-- Footer Start -->
                <div class="footer">
                    <div id="button"></div>
                    <div id="container">
                        <ul class="nav">
                            <p>&copy; 2024 - Nathan CHAMPAGNE | Tous droits réservés</p>
                        </ul>
                    </div>
                </div>
                <!-- Footer End -->
            </section>
            <!-- Contact Section End -->

        </div>
        <!-- Main Content End -->
    </div>
    <!-- Main Container End -->

    <!-- Style Switcher Start -->
    <div class="style-switcher">
        <div class="style-switcher-toggler s-icon">
            <i class="fas fa-cog fa-spin"></i>
        </div>
        <div class="day-night s-icon">
            <i class="fas fa-moon"></i>
        </div>
        <h4>Thèmes</h4>
        <div class="colors">
            <span class="color-1" onclick="setActiveStyle('color-1')"></span>
            <span class="color-2" onclick="setActiveStyle('color-2')"></span>
            <span class="color-3" onclick="setActiveStyle('color-3')"></span>
            <span class="color-4" onclick="setActiveStyle('color-4')"></span>
            <span class="color-5" onclick="setActiveStyle('color-5')"></span>
        </div>
    </div>
    <!-- Style Switcher Start -->

    <!-- Fichiers JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js"
        referrerpolicy="noreferrer"></script>
    <script src="script.js"></script>
    <script src="style-switcher.js"></script>
</body>

</html>