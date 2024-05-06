<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Hoffer Mickael - Accueil</title>
    <!-- Ajouter Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* CSS spécifique pour la page d'accueil */
        header {
            background-image: url('assets/images/profile.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            position: relative;
            text-align: center;
            color: white;
        }
        .welcome-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .portfolio-section {
            padding: 50px 0;
            background-color: #f5f5f5;
            text-align: center;
        }
        .portfolio-label {
            font-size: 64px; /* Augmentation de la taille */
            margin-bottom: 20px; /* Espace entre chaque label */
            display: block;
            font-weight: bold; /* Ajout de la graisse */
            text-transform: uppercase; /* Met en majuscule */
        }
        .portfolio-text {
            color: #333;
            font-size: 24px; /* Augmentation de la taille */
            line-height: 32px; /* Espacement entre les lignes */
        }
        /* Couleur des labels */
        .blue-label {
            color: #3498db; /* Bleu */
        }
        .green-label {
            color: #27ae60; /* Vert */
        }
        .yellow-label {
            color: #f1c40f; /* Jaune */
        }
        /* Espacement entre les lignes de labels */
        .row-margin {
            margin-bottom: 30px;
        }
        .bottom-margin {
            margin-bottom: 100px; /* Ajout d'un espace supplémentaire */
        }

        .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #3498db;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <header>
        <nav class="menu-container">
            <a href="index.php"><i class="fas fa-home"></i> Accueil</a>
            <a href="profile.php"><i class="fas fa-user"></i> Profil</a>
            <a href="bts_sio.php"><i class="fas fa-graduation-cap"></i> BTS SIO</a>
            <a href="epreuveE4.php"><i class="fas fa-briefcase"></i> Situations professionnels E4</a>
            <a href="epreuveE5.php"><i class="fas fa-briefcase"></i> Situations professionnels E5</a>
            <a href="veille_technologique.php"><i class="fas fa-search"></i> Veille Technologique</a>
            <a href="contact.php"><i class="fas fa-envelope"></i> Contact</a>
        </nav>
        <div class="welcome-text">
            <h1>Bienvenue sur le portfolio de Hoffer Mickael !</h1>
            <p>Étudiant en alternance en BTS SIO option SLAM à l'école IRIS Strasbourg</p>
        </div>
    </header>
    
    <!-- Section pour le contenu du portfolio -->
    <section class="portfolio-section">
        <div class="container">
            <h1>Contenu de mon portfolio</h1><br>
            <h5>Nos preuves de travail sont hébergées et présentées dans le dossier numérique aux jurys des épreuves E4 et E5 du BTS SIO.</h5><br><br>
            <!-- Contenu du portfolio -->
            <div class="row row-margin"> <!-- Ajout de la classe row-margin pour l'espace -->
                <div class="col-lg-4">
                    <span class="portfolio-label blue-label"><i class="fas fa-laptop-code"></i></span>
                    <span class="portfolio-text">Ce site web (mon portfolio)</span>
                </div>
                <div class="col-lg-4">
                    <span class="portfolio-label blue-label"><i class="fas fa-address-card"></i></span>
                    <span class="portfolio-text">Mon CV</span>
                </div>
                <div class="col-lg-4">
                    <span class="portfolio-label blue-label"><i class="fab fa-linkedin"></i></span>
                    <span class="portfolio-text">Mon profil Linkedin</span>
                </div>
            </div>
            <div class="row row-margin"> <!-- Deuxième ligne de labels -->
                <div class="col-lg-4">
                    <span class="portfolio-label green-label"><i class="far fa-file-alt"></i></span>
                    <span class="portfolio-text">Documentation Mission E4</span>
                </div>
                <div class="col-lg-4">
                    <span class="portfolio-label green-label"><i class="far fa-file-alt"></i></span>
                    <span class="portfolio-text">Tableau de synthèse E4</span>
                </div>
                <div class="col-lg-4">
                    <span class="portfolio-label green-label"><i class="far fa-file-alt"></i></span>
                    <span class="portfolio-text">Fiches Missions E5</span>
                </div>
            </div>
            <div class="row row-margin bottom-margin"> <!-- Troisième ligne de labels avec espace -->
                <div class="col-lg-4">
                    <span class="portfolio-label yellow-label"><i class="far fa-file-alt"></i></span>
                    <span class="portfolio-text">Documentations Missions E5</span>
                </div>
                <div class="col-lg-4">
                    <span class="portfolio-label yellow-label"><i class="fas fa-briefcase"></i></span>
                    <span class="portfolio-text">Missions Stages Alternance</span>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="container">
            <h1>A propos de moi</h1><br>
            <h5>Etudiant en deuxième année de BTS SIO option SLAM (Solutions logicielles et Applications Métiers), je termine une alternance de un an dans la société Jung Logistique à Sélestat en tant que Apprenti projet.</h5><br><br>
            
            <a href="profile.php" class="btn">Accéder a ma page de profil</a>
        </div>
        <br><br><br><br>
    </section>
    <footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-text">
                <p>&copy; 2024 Hoffer Mickael. Tous droits réservés.</p>
                <p><a href="contact.php">Contactez-moi</a> | <a href="https://www.linkedin.com/feed/">Mon LinkedIn</a></p>
        </div>
    </footer>
</body>
</html>
