<?php
// load the profile class and date validator file

require_once("profile.php");

//use the constructor to create a new Profile
$profile = new Profile(1, 2, "Homer", "Bart");
echo $profile;



