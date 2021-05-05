<?php

require('../config/bdd.php');
if(isset($_GET['idFormationAREP'])){
$idFormation = $_GET['idFormationAREP'];

$deleteContenu = $pdo->prepare('DELETE FROM formationsarep WHERE id = :id');
        $deleteContenu->execute(array(
        'id' => $idFormation
        ));
  
    }
    if(isset($_GET['idFormationPro'])){
        $idFormatioPro = $_GET['idFormationPro'];
        
        $deleteContenu = $pdo->prepare('DELETE FROM formationsprofessionelles WHERE id = :id');
                $deleteContenu->execute(array(
                'id' => $idFormatioPro
                ));
          
            }
      
?>