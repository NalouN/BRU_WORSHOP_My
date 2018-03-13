<?php
// Affiche la liste de tous les billets du blog
require_once 'Modele/modele.php';
function accueil() {
	$b = new Modele();
	$billets = $b->getBillets();
	require 'Vue/vueAccueil.php';
}
?>

<?php
/*
require_once 'Modele/Billet.php';
require_once 'Vue/Vue.php';

class ControleurAccueil {

  private $billet;

  public function __construct() {
    $this->billet = new Billet();
  }

  // Affiche la liste de tous les billets du blog
  public function accueil() {
    $billets = $this->billet->getBillets();
    $vue = new Vue("Accueil");
    $vue->generer(array('billets' => $billets));
  }
}*/
?>