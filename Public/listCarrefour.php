<?php
    //name of file is listCarrefour.php
    require_once "../App/Data_Base/Connection.php";
    require_once "../App/Data_Base/Query.php";
    require_once "../App/Models/Carrefour.php";
    
    $c=new Carrefour();
    
    echo  json_encode ($c->findCarrefoursByLogin($_GET['login']));
    
    
?>