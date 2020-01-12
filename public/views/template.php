<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title><?= isset($title) ? $title : WEBSITE_TITLE ?></title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="<?= css_url('style.css'); ?>" rel="stylesheet" type="text/css">
    </head>
    
    <body>     

    <header>   <!-- debut header-->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <!-- logo-->
            <a class="navbar-brand"><img src="public/assets/img/logo_foot.jpg" height="50px" ></a> 

        <div class="container-fluid">  <!--debut container-fluid-->

                    <!--liste de menus-->
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link " href="<?= BASE_URL; ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link " href="<?= url('a-propos') ?>">A propos</a></li>
                <li class="nav-item"><a class="nav-link " href="<?= url('contact') ?>">Contact</a></li>
                <li class="nav-item"><a class="nav-link " href="<?= url('offre') ?>">Offres</a></li>
                <li class="nav-item"><a class="nav-link " href="<?= url('inscription') ?>">Inscription</a></li>
                <li class="nav-item"><a class="nav-link " href="<?= url('fiche-joueur') ?>">Fiches Joueurs</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Login</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= url('joueur') ?>">Joueur</a>
                        <a class="dropdown-item" href="<?= url('agent') ?>">Agent</a>
                        <a class="dropdown-item" href="<?= url('club') ?>">Club</a>
                    </div>
                </li>
            </ul>
        <!--fin liste de menus-->
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
        </div><!--fin container-fluid-->
        </nav> <!--fin nav-->
        <div id="bandeau_header">
            <img src="public/assets/img/image_header.png" height="250px" width= 100% >
        </div>

    </header>  <!-- fin header-->

    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">
                <?php
                    // contenu de la page
                    echo $content; 
                ?>
            </div>
        </div>
    </main>

        <footer class="row">
            <div class="container">
                <!--copyright-->
                <p>2019 &copy; </p>
                <div>
                
                </div>

            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="<?= js_url('script.js'); ?>"></script>
    </body>
</html>
