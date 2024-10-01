<?php
include("views/v_sommaire.php");
if(!isset($_REQUEST['action'])){
    $_REQUEST['action'] = 'afficherFormulaire';
}
$action = $_REQUEST['action'];
switch($action){
    case 'afficherFormulaire':
        include("views/v_formulaire_visualisation.php");
        break;
    case 'visualiserFrais':
        $mois = $_REQUEST['mois'];
        $annee = $_REQUEST['annee'];
        $typeFrais = $_REQUEST['typeFrais'];
        
        $cumulFrais = $pdo->getCumulFraisParVisiteur($mois, $annee, $typeFrais);
        include("views/v_resultat_visualisation.php");
        break;
}
