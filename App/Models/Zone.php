<?php
    class Zone
    {
        private $nomzone;
        
        public function __construct()
        {
            
        }
        
        public function getNomZone()
        {
            return $this->nomzone;
        }
        
        public function setNomZone($nomzone)
        {
            $this->nomzone=$nomzone;
        }
    }
?>