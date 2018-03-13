<?php
// Affiche les détails sur un billet
require_once 'Modele/modele.php';
function billet($idBillet) {
	$b = new Modele();
	$billets = $b->getBillets();
	require 'Vue/vueBillets.php';
}
?>