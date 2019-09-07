<?php
    //file name is consulter_entretien.php
    require_once "../App/Data_Base/Connection.php";
    require_once "../App/Data_Base/Query.php";
    require_once "../App/Models/Semaine_Entretien.php";
    
    $e=new Semaine_Entretien();
    
    echo  json_encode ($e->findEntretienByLogin($_GET['login']));
    
?>