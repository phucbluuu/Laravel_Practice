/* The Staff class extends the Character class and generates a unique staff code for each staff member
based on their part. */
<?php
require_once("character.php");

class Staff extends Character {
    private $staffcode;
    private $part;

    public function __construct($fullname_staff, $countrycode, $part) {
        parent::__construct($fullname_staff, $countrycode);
        $this->part = $part;
        $this->staffcode = $this->staffcode_continue();
    }


    public function get_staffcode() {
        return $this->staffcode;
    }

    public function get_part() {
        return $this->part;
    }

    private static $makecode = 0;
    private function staffcode_continue() {
        static $makecode = 1;
        return $makecode++;
    }
}