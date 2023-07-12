<?php

require 'connections.php';
require 'router.php';
session_start();
$app = [];
$app['db']= (new Database())->db;

$router = new Router();

$router->get('/','Controller/signUp.php');
$router->get('/loginPage','Controller/loginPage.php');
$router->post('/login_logic','Controller/login_logic.php');
$router->get('/AddSongs','Controller/addSongs.php');
$router->post('/addSongLogic','Controller/addSongLogic.php');
$router->get('/addArtists','Controller/addArtists.php');
$router->post('/addArtistLogic','Controller/addArtistLogic.php');

$router->get('/allUsers','Controller/getUserlist.php');

require $router->CheckingURI();