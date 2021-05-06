<?php


include("../config/actions.php");
require('../vues/head_admin.php');


session_start();
// Quelle est l'action à faire ?
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "accueil";
}

// Est ce que cette action existe dans la liste des actions
if (array_key_exists($action, $listeDesActions) == false) {
    include("../vues/404.php"); // NON : page 404
} else {
    include($listeDesActions[$action]); // Oui, on la charge
}

?>
<?php

require('../vues/head_admin.php');

?>


<?php

if(!isset($_SESSION['id'])){
    ?>





<body>
    <section class="connexion">
        
            
    <h1 class="titre-connexion">Connexion</h1>
                
                <form method="POST" action='index.php?action=connexion' id="formulaire" class="form-connexion" enctype='multipart/form-data'>
                   
                  
                    <input class="input-inscription" type="text" name="connexion-identifiant" placeholder="Login">
                    <input class="input-inscription" type="password" name="connexion-mdp" placeholder="Mot de passe">
                    <input class="input-inscription" type="submit" name="connexion-bouton" value="Se connecter">
                    
               
                </form>
               
                
            
        
                
  
                
            </div>
            
    
    </section>
</body>
</html>

<?php

}
include('../vues/scripts.php');
?>
