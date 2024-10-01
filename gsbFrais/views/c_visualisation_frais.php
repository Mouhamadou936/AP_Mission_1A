<?php
if(!isset($_REQUEST['action'])){
    $_REQUEST['action'] = 'afficherFormulaire';
}
$action = $_REQUEST['action'];
include 'views/v_sommaire_comptable.php';
switch($action){
    case 'afficherFormulaire':
        include("views/v_formulaire_visu.php");
        break;
    case 'visualiserFrais':
        $mois = $_REQUEST['mois'];
        $annee = $_REQUEST['annee'];
        $typeFrais = $_REQUEST['typeFrais'];
        
        $cumulFrais = $pdo->getCumulFraisParVisiteur($mois, $annee, $typeFrais);
        include("views/v_resultat_visu.php");
        break;
}
