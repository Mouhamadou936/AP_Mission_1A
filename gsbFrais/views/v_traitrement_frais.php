<div id="traitement_frais">
<form action="index.php?uc=traitement&action=edtf" method="post">
    GESTION DES FRAIS DES VISITEURS
    <h1>Période</h1>
    <form method="get" action="index.php?uc=accueil&action=voirEtatFrais">
        <label>Mois/Année </label> :   <input type="date" name="Mois"> 

        <label>Type de frais : </label> <input type="text" name="typefrais">
        <div class="piedForm">
        <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
        </p> 
        </div>
        
    </form>


    

</div>