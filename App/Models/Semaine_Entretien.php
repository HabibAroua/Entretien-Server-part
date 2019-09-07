<?php

    class Semaine_Entretien
    {
		private $id_se;
        private $id_semaine;
        private $num_prog;
        private $date_entretien;
        
        public function __construct()
        {
            
        }
        
        public function getId_semaine()
        {
            return $this->id_semaine;
        }
        
        public function setId_semaine($id_semaine)
        {
            $this->id_semaine=$id_semaine;
        }
        
        public function getNum_prog()
        {
            return $this->num_prog;
        }
        
        public function setNum_prog($num_prog)
        {
            $this->num_prog=$num_prog;
        }
        
        public function getDate_entretien()
        {
            return $this->date_entretien;
        }
        
        public function setDate_entretien($date_entretien)
        {
            $this->date_entretien=$date_entretien;
        }
        
        public function findEntretienByLogin($login)
        {
			$T= Array();
            $res=output (
							"select semaine_entretien.id, carrefour.id , carrefour.nomCarefour , annee.val , mois.val , semaine.val
								from carrefour ,zone , users , entretien ,semaine ,mois ,annee, semaine_entretien
								where users.login='$login' and users.nomzone = zone.nomzone
								and zone.nomzone = carrefour.nomzone
								and carrefour.id=entretien.id_carrefour
								and semaine.id= semaine_entretien.id_semaine
								and entretien.num_prog=semaine_entretien.num_prog
								and semaine_entretien.date_entretien is null
								and annee.val=mois.val_annee
								and semaine.id_mois=mois.id
								and semaine_entretien.est_vrai=0"
						);
            $i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
              	$T[$i]=$entre = array('idEn_Se'=>$tab[0]."",'id'=>$tab[1]."",'nom_carrefour'=>$tab[2]."",'annee'=>$tab[3]."",'mois'=>$tab[4]."",'semaine'=>$tab[5]."",);
              	$i++;
            }
			return $T;
        }
		
		public function effectue($id)
		{
			$sql="update semaine_entretien set date_entretien=now(), est_vrai=1 WHERE id=$id";
			return input($sql);
		}
    }

?>