<?php
    $host='localhost';
	$dbname='airline';
	$username='root';	
	$password	='';	
	try
	{	
        $con=new PDO("mysql:host=$host;	dbname=$dbname",$username,$password);
	    echo '<script> alert("Bienvenue cher client"); </script>';			
	}	
    catch(PDOException	$pe)	
	{							
		echo "connexion	a	la	base	a	echouee";
	}
?>