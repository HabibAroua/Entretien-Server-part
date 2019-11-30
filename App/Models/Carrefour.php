<?php

    class Carrefour
    {
        private $id;
        private $nomCarrefour;
        
        public function __construct()
        {
            
        }
        
        public function getId()
        {
            return $this->id;
        }
        
        public function setId($id)
        {
            $this->id=$id;
        }
        
        public function getNomCarrefour()
        {
            return $this->nomCarrefour;
        }
        
        public function setNomCarrefour($nomCarrefour)
        {
            $this->nomCarrefour=$nomCarrefour;
        }
        
        public function findCarrefoursByLogin($login)
        {
            $T= Array();
            $sql="Select carrefour.nomCarefour
                    from carrefour,users,zone
                    where zone.nomzone=carrefour.nomzone
                    and users.nomzone=zone.nomzone
                    and users.login='$login'";
            $res=output($sql);
            $i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
              	$T[$i]=$carrefour = array('nom'=>$tab[0],);
              	$i++;
            }
	    return $T;
        }
    }
?>
