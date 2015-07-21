<?php


class Member {

	public $memberId;

	public $birthday;

	public $email;

	public $firstName;

	public $lastName;

	public $loginName;

	public $password;

	public function login(){
	return "logging in ...";
}
	public function logout(){
		return "logging out ...";
	}
}