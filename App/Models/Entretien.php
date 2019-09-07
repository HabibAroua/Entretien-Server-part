<?php
    class Entretien
    {
        private $num_prog;
        private $type;
        
        public function __construct()
        {
            
        }
        
        public function getNum_Prog()
        {
            return $this->num_prog;
        }
        
        public function setVal($num_prog)
        {
            $this->num_prog=$num_prog;
        }
        
        public function getType()
        {
            return $this->type;
        }
        
        public function setType($type)
        {
            $this->type=$type;
        }
    }
?>