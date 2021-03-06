<?php

// Create Router instance
$router = new Router();

// example.com
$router->get('', 'PagesController@home');

// example.com/a-propos
$router->get('a-propos', 'PagesController@about');
// example.com/contact
$router->get('contact', 'PagesController@contact');
// reception des données 
$router->post('contact', 'PagesController@contact');

//PAGE D'INSCRIPTION///////////////////////////
$router->get('inscription', 'InscriptionController@inscription');

//INSCRIPTION  JOUEUR
$router->get('infojoueur', 'InfosjoueurController@infosjoueur');
$router->post('infojoueur', 'InfosjoueurController@infosjoueur');


// pages avec parametre 
$router->get('plateforme/update/{id}', 'PlateformesController@update');

// page 404
$router->set404('PagesController@page404');

// Run the routes
$router->run();