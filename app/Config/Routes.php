<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get("/","Home::index", ["filter" => \App\Filters\AuthenticatedFilter::class]);
$routes->get("/home","Home::index", ["filter" => \App\FiltersAuthenticatedFilter::class]);
$routes->get("/abonnes", "Abi=onne::index", ["filter" => 'isAdmin']);
$routes->post("/abonnes/(:num)", "Abonne::updateAbonne", ["filter" => "isAdmin"]);
$routes->get("/abonnes/(:num)", "Abonne::modifyAbonneForm", ["filter" => "isAdmin"]);
$routes->get("/abonnes/(:num)/delete", "Abonne::deleteAbonneform", ["filter" => "isAdmin"]);
$routes->post("/abonnes/(:num)/delete", "Abonne::deleteAbonne", ["filter" => "isAdmin"]);
$routes->get("/abonnes/new", "Abonne::createAbonneForm", ["filter" => "isAdmin"]);
$routes->post("/abonnes", "Abonne::addAbonne", ["filter" => "isAdmin"]);
$routes->get("/livres", "Livre::index", ["filter" => "authentifcated"]);
$routes->get("/livres/new", "Livres::createLivreForm", ["filter" => "isAdmin"]);
$routes->post("/livres", "Livre::addLivre", ["filter" => "isAdmin"]);
$routes->get("/livres/(:num)", "Livre::modifyLivreForm", ["filter" => "isAdmin"]);
$routes->get("/login", "Connection::loggout");
$routes->get('/login','Connection::index');
$routes->post('/login', 'Connection::attemptLogin');
$routes->get("/login", "Connection::loggout");


$routes->get("/api/auteurs", "Auteur::getAuteurs");