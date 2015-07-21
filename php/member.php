<?php


class Member {

	public $memberId;
	public $birthday;
	public $email;
	public $firstName;
	public $lastName;
	public $loginName;
	public $password;
	const MINCHARS = 8;

	public function login(){
	return "Logging in ...";
}
	public function logout(){
		return "Logging out ...";
	}
	public function setPassword ($string)
	{
		if (strlen($string) < self::MINCHARS) {
			throw new Exception('The password should be at least ' . self::MINCHARS . ' characters long.');
		}
	}
}