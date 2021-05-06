<?php

require('../config/bdd.php');
if(isset($_GET['idFormationAREP'])){
$idFormation = $_GET['idFormationAREP'];

$deleteContenu = $pdo->prepare('DELETE FROM formationsarep WHERE id = :id');
        $deleteContenu->execute(array(
        'id' => $idFormation
        ));
  
    }

    if(isset($_GET['idFormationPros'])){
        $idFormatioPro = $_GET['idFormationPros'];
        
        $deleteContenu = $pdo->prepare('DELETE FROM formationsprofessionelles WHERE id = :id');
                $deleteContenu->execute(array(
                'id' => $idFormatioPro
                ));
          
            }

            header("Location: /valarep/admin/formations/toutes-formations.php"); 

      
?>