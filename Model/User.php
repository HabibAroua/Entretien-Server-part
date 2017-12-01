<?php
    require 'db\Query.php';
	
	class User
	{
		private $userName;
		private $password;
		public function __construct ($userName,$password)
		{
			$this->userName=$userName;
			$this->password=$password;
		}
		
		public function getUserName()
		{
			return $this->userName;
		}
		
		public function getPassword()
		{
			return $this->password;
		}
		
		public function setUserName($userName)
		{
		    $this->userName=$userName;	
		}
		
		public function setPassword($password)
		{
			$this->password=$password;
		}
		
		public function insert()
		{
			queryIn("insert into User values ('$this->userName','$this->password')");
		}
		
	}
	$U = new User('Habib','azerty');
	$U->insert();
?>