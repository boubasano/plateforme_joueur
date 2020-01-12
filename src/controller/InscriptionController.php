<?php 
    class InscriptionController {

        public function all() {
            // appel a la BDD 
            $genres = Genre::findAll();

            view('exemple.all', compact('genres'));
        }

        public function inscription(){

            view('pages.inscription');
        }

        public function show($id) {
            
            view('exemple.all');
        }

        
        public function page404() {
    
            view('pages.404');
    
        }

    }