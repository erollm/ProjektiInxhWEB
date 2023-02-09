<?php
class Validimi{
    private $passwordRegex = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";

	public function validUsername($username){
	  return $username && strlen($username) < 20;
	}
    
	public function validPassword($password){
	  return preg_match($this->passwordRegex, $password);
	}

	public function validEmail($email){
	  return filter_var($email, FILTER_VALIDATE_EMAIL);
	}

}

?>