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
	 * mutator method for member id
	 *
	 * @param int $newMemberId new value of member id
	 * @throws InvalidArgumentException if $newMemberId is not an integer or not positive
	 * @throws RangeException if $newMemberId is not positive
	 * @param int $newMemberId
	 **/
	public function setMemberId($newMemberId) {
		// verify the member id is valid
		$newMemberId = filter_var($newMemberId, FILTER_VALIDATE_INT);
		if($newMemberId === false) {
			throw(new InvalidArgumentException("member id is not a valid integer"));
		}
		// verify the member id is positive
		if($newMemberId <= 0) {
			throw(new RangeException("member id is not positive"));
		}
		// convert and store the member id
		$this->memberId = intval($newMemberId);
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
	 * mutator method for birthday
	 *
	 * @param mixed #newBirthdaydate as a DateTime object or string (or null to load the user's birthday)
	 * @throws InvalidArgumentException if $newBirthday is not a valid object or string
	 * @throws RangeException if $newBirthday is a date that is not over 18 years old.
	 * @throws RangeException if $newBirthday is a date that does not exist
	 **/
	public function setBirthdayAttributes()
	{
		return $this->attributes['year', 'month', 'day'] = date('Y-m-d', Input::get('year') . '-' . Input::get('month') . '-' . Input::get('day'));
  }

		// store the birth date
		try {
			$newBirthday = validateDate($newBirthday);
		} catch(InvalidArgumentException $invalidArgument) {
			throw(new InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
		} catch(RangeException $range) {
			throw(new RangeException($range->getMessage(), 0, $range));
		}
		$this->birthday = $newBirthday;
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
	 * mutator method for email
	 *
	 * @param string $newEmail new value of email
	 * @throws InvalidArgumentException if $newEmail is not a string
	 * @throws InvalidArgumentException if $newEmail is not valid
	 **/
	public function setEmail($newEmail) {
		// verify the email is valid
		$newEmail = trim($newEmail);
		if(trim(email) != "") { // some validation here
			$newEmail = filter_var($newEmail, FILTER_SANITIZE_STRING);
			if(empty($newEmail) === true) {
				throw(new InvalidArgumentException("a valid email is required"));
			}
		}
	}

	/**
	 * accessor method for first name
	 *
	 * @return string value of first name
	 **/
	public function getFirstName() {
		return $this->firstName;
	}

		//mutator method

		public function setFirstName($firstName) {

			if(trim($firstName) != "") { // some validation here

				$this->firstName = $firstName;
				return true;

			}

			else {
				return false;
			}

	/**
	 * accessor method for last name
	 *
	 * @return string value of last name
	 **/
	public function getLastName() {
		return $this->lastName;


		//mutator method

		public function setLastName($lastName) {

			if(trim($firstName) != "") { // some validation here

				$this->firstName = $firstName;

				return true;

			}

			else {

				return false;

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




	public function setBirthday($newBirthday) {

	}
}