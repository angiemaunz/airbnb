<?php

/** require_once */

/**
 * Small Cross Section of a AirBnb Member
 *
 * This -------------------
 *
 * @author Angie Maunz <me@example.com>
 **/

class Member {
	/** id for this member; This is the primary key
	 * @var int $memberId
	 **/
	public $memberId;

	/**  birthday entered must be at least 18 years old.
	 * @var date $birthday
	 **/
	public $birthday;

	/** email of the member
	 * @var VARCHAR $email
	 **/
	public $email;

	/** first name of the member
	 * @var varchar $firstName
	 **/
	public $firstName;

	/** last name of the member
	 * @var varchar $lastName
	 **/
	public $lastName;
	/** id for this member; This is the primary key
	 * @var varchar $lastName
	 **/
	public $loginName;
	/** id for this member; This is the primary key
	 * @var varchar $loginName
	 **/
	public $password;
	/** member's login password
	 * @var char $password
	 **/

	public function login(){
	return "logging in ...";
}

	public function logout(){
		return "logging out ...";
	}
}