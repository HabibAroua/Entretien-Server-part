<?php
    require_once "../App/Data_Base/Connection.php";
    require_once "../App/Data_Base/Query.php";
    require_once "../App/Models/User.php";
    
    if((isset($_POST['login'])) && ($_POST['password']))
    {
        $u=new User();
        $u->findUserByLogin($_POST['login']);
        if($u->getLogin()==null)
        {
            echo '1';
        }
        else
        {
            if($_POST['password']==$u->getPassword())
            {
                echo '2';
            }
            else
            {
                echo '3';
            }    
        }
    }
    else
    {
        echo "Champ vide";
    }
?>