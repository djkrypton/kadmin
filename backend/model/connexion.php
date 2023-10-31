<?php

/*try 
{
	// variable globale
	$PDO = new PDO(DB_CONNECTION.':host='.DB_HOST.';dbname='.DB_DATABASE,DB_USERNAME,DB_PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	$PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); // affiche les erreurs de requete
} 
catch (Exception $e) { print '[Connexion BDD]: '.$e->getMessage(); exit; }*/