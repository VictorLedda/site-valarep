<?php

require('../vues/head_admin.php');

?>








<body>
    <section class="inscription">
        
            
    <h1 class="titre-inscription">Inscription</h1>
                
                <form method="POST" action='index.php?action=inscription' id="formulaire" class="form-inscription" enctype='multipart/form-data'>
                   
                  
                    <input class="input-inscription" type="text" name="inscription-identifiant" placeholder="Login">
                    <input class="input-inscription" type="file" name="inscription-photo">
                    <input class="input-inscription" type="password" name="inscription-mdp1" placeholder="Mot de passe">
                    <input class="input-inscription" type="password" name="inscription-mdp2" placeholder="Confirmation mot de passe">
                    <input class="input-inscription" type="submit" name="inscription-bouton" value="S' inscrire">
                    
               
                </form>
               
                
            
        
                
  
                
            </div>
            
    
    </section>
</body>
</html>








