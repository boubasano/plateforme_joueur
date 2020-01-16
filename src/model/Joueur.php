<?php

/**
 * Nous allons utiliser des méthodes issues de Db, nous disons que Article
 * est une classe enfant, elle hérite de la classe Db 
 */
class Joueur extends Db {

    /**
     * Proprietés 
     */
    protected $id;

    /**
     * Constantes
     * Nous pouvons aussi définir des constantes. Ici, il s'agit du nom de la table. Ainsi, s'il venait à changer, nous n'aurons plus qu'à le changer à cet endroit.
     */
    const TABLE_NAME = "joueur";
    const PRIMARY_KEY = "id_joueur";

    /**
     * Méthodes magiques
     */
    public function __construct( $id = null ) {

        /**
         * Pour chaque argument, on utilise les Setters pour attribuer la valeur à l'objet.
         * Pour appeler une méthode non statique de la classe DANS la classe, on utilise $this.
         */
 
    }

     /**
     * CRUD Methods
     */
    public static function save($data) {

        $nouvelId = Db::dbCreate(self::TABLE_NAME, $data);

        return $nouvelId;
    }

    public static function update($data, $id) {

        Db::dbUpdate(self::TABLE_NAME, 
                        $data, 
                        [self::PRIMARY_KEY => $id]);

        return;
    }

    public static function delete($id) {

        Db::dbDelete(self::TABLE_NAME, [self::PRIMARY_KEY => $id ]);
        
        return;
    }

    public static function findAll() {

        $bdd = Db::getDb();

        $query = $bdd->prepare('SELECT *
                            FROM '. self::TABLE_NAME);

        // je l'execute 
        $query->execute();

        // je retourne la liste d'articles
        return $query->fetchAll(PDO::FETCH_ASSOC);       
    }

    public static function findOne(int $id) {

        $bdd = Db::getDb();

        $query = $bdd->prepare('SELECT *
                            FROM '. self::TABLE_NAME .' 
                            WHERE '.self::PRIMARY_KEY.' = :id');

        // je l'execute 
        $query->execute([
            'id' => $id
        ]);

        // je retourne la liste d'articles
        return $query->fetch(PDO::FETCH_ASSOC);

    }


    /**
     * Get propietés
     */ 
    public function getId()
    {
        return $this->id;
    }



    public static function connect($email, $password){

        $bdd = Db::getDb();
    
        // je verifie si l'e-mail est présent en BDD 
        $query = $bdd->prepare('SELECT * 
                                FROM joueur 
                                WHERE email_joueur = :email');
    
        // j'execute ma requete 
        $query->execute([
            'email' => $email
        ]);
     
        $user = $query->fetch(PDO::FETCH_ASSOC);
        
        // si j'ai un utilisateur corresspondant à l'email 
        if ($user) {

            // je vérifie si le MDP tapé correspond à la clé de hashage 
            $verify = password_verify($password, $user['password_joueur']);

            if ($verify) {
                // connecté
                unset($user['password_joueur']);

                // je stock les infos user dans une variable de session 
                $_SESSION['joueur'] = $user;

                // je retourne les infos utilisateur 
                return $user;
            }
            else {
                // je retourne false si le password est inccorect 
                return false;
            }
        }
        else {
            // je retourne false si l'e-mail n'est pas enregistré en BDD 
            return false;
        }

    }

    public static function logout() {

        session_destroy();

    }


} 