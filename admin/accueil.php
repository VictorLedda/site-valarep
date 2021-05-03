<?php

require('../vues/head_admin.php');

?>


<?php

if(isset($_SESSION['id'])){
    ?>
<header class='page-ajout'>
    <form method="POST" action='index.php?action=deconnexion'>
    <input class='bouton-deconnexion' name='publier' type='submit' value='deconnexion'/>
    
    </form>
    
    </header>

<section class='formations'>


<?php

require('../vues/sidebar_admin.php');

?>


<div class='contenu-accueil'>




<div class='trait-noir'></div>
<div class='contenu-accueil-text'>
<h1 class='titre-accueil'>Bienvenue sur l'admin de Valarep</h1>
<a href='/valarep'><input class='bouton-site' value='Aller sur le site' type='submit' target="_blank"/></a>

</div>    
</div>
</section>



<?php


}


?>

<?php

include('../vues/scripts.php');

?>