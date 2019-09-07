<?php
    class Mois
    {
        private $id;
        private $val;
        
        public function __construct()
        {
            
        }
        
        public function getVal()
        {
            return $this->val;
        }
        
        public function setVal($val)
        {
            $this->val=$val;
        }
        
        public function getId()
        {
            return $this->id;
        }
        
        public function setId($id)
        {
            $this->id=$id;
        }
    }
?>