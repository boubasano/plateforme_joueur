<?php 
    class InfosjoueurController {

        public function all() {
            // appel a la BDD 
            $genres = Genre::findAll();

            view('exemple.all', compact('genres'));
        }

        public function infosjoueur() {
        
            $form = new Form($_POST);
    
            $form
                ->input('text', "nom", "Nom")->required()
                ->input('text', "prenom", "Prénom")->required()
                ->input('text', "email", "E-mail")->required()
                ->input('password', "motdepasse", "Mot de passe")->required()
                ->input('text', "date", "Date de naissance")->required()
                ->input('text', "continent", "Continent")->required()
                ->input('text', "pays", "Pays")->required()
                ->input('text', "ville", "Ville")->required()               
                ->submit('enregistrer');
    
            $formulaireHtml = $form->getForm();
    
            $formValid  = false;
            $errors     = false; 
    
            // si le formulaire est validé 
            if($form->valid()){
    
                // formulaire valide
                $formValid = true;
    
                // connexion de l'utilisateur 
                $id = Joueur::save([
                    "nom_joueur"     => $_POST['nom'],
                    "prenom_joueur"     => $_POST['prenom'],
                    "datenaissance_joueur"     => $_POST['date'],
                    "continent_joueur"     => $_POST['continent'],
                    "pays_joueur"     => $_POST['pays'],
                    "ville_joueur"     => $_POST['ville'],
                    "email_joueur"     => $_POST['email'],
                    "motdepasse_joueur"     => password_hash($_POST['motdepasse'], PASSWORD_BCRYPT)                  
                ]);
                 var_dump($id);
                if ( $id) {
                    // user connecté 
                    //redirectTo('inscription');
                   
                }
            } else {
                // affichage des erreurs 
                $errors =  $form->displayErrors();
            }
    
            // vue de la page login 
            view('pages.infojoueur', compact('formulaireHtml', 'formValid', 'errors'));
       
        }

        public function show($id) {
            
            view('exemple.all');
        }

    }