<?php

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
	private $memberId;

	/**  birthday entered must be at least 18 years old.
	 * @var DateTime $birthday
	 **/
	private $birthday;

	/** email of the member
	 * @var string $email
	 **/
	private $email;

	/** first name of the member
	 * @var string $firstName
	 **/
	private $firstName;

	/** last name of the member
	 * @var string $lastName
	 **/
	private $lastName;

	/** login name of the user
	 * @var string $loginName
	 **/
	private $loginName;

	/** password need hash and salt
	 * @var string $password
	 **/
	public $password;
	/** member's login password
	 * @var string $password
	 **/


	/**
	 * accessor method for member id
	 *
	 * @return int value of member id
	 **/
	public function getMemberId() {
		return $this->memberId;
	}

	/**
	 * accessor method for birthday
	 *
	 * @return datetime value of birthday
	 **/
	public function getBirthday() {
		return $this->birthday;
	}

	/**
	 * accessor method for email
	 *
	 * @return string value of email
	 **/
	public function getEmail() {
		return $this->email;
	}

	/**
	 * accessor method for first name
	 *
	 * @return string value of first name
	 **/
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * accessor method for last name
	 *
	 * @return string value of last name
	 **/
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * accessor method for login name
	 *
	 * @return string value of login name
	 **/
	public function getLoginName() {
		return $this->loginName;
	}

	/**
	 * accessor method for password
	 *
	 * @return string value of password
	 **/
	public function getPassword() {
		return $this->password;
	}

}