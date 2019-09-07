<?php
    class User
    {
        private $login;
        private $nom;
        private $prenom;
        private $password;
        
        public function __construct()
        {
            
        }
        
        public function getLogin()
        {
            return $this->login;
        }
        
        public function getNom()
        {
            return $this->nom;
        }
        
        public function getPrenom()
        {
            return $this->prenom;
        }
        
        public function getPassword()
        {
            return $this->password;
        }
        
        public function setLogin($login)
        {
            $this->login=$login;
        }
        
        public function setNom($nom)
        {
            $this->nom=$nom;
        }
        
        public function setPrenom($prenom)
        {
            $this->prenom=$prenom;
        }
        
        public function setPassword($password)
        {
            $this->password=$password;
        }
        
        public function findUserByLogin($login)
        {
            $res=output("select login , password from users where login='$login' ");
            $i=0;
            while($tab=$res->fetch(PDO::FETCH_NUM))
            {
                $this->login=$tab[0];
                $this->password=$tab[1];	
            }
        }
    }

?>