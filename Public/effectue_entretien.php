<?php
    //file name is effectue_entretien.php
    require_once "../App/Data_Base/Connection.php";
    require_once "../App/Data_Base/Query.php";
    require_once "../App/Models/Semaine_Entretien.php";
    
    if(isset($_POST['id']))
    {
        $e=new Semaine_Entretien();
        $test=$e->effectue($_POST['id']);
        if($test)
        {
            echo "Vous avez effectué l'entretien avec succes";
        }
        else
        {
            echo 'Error';
        }
    }
    else
    {
        echo 'Valeur null';
    }
?>