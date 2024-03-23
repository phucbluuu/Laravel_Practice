/* The `Character` class in PHP represents a character with properties for full name and country code,
providing methods to retrieve these values. */
<?php

class Character
{
    private $fullName;          // ! Full name of the character
    private $countryCode;       // ! Country code of the character

    public function __construct($fullName, $countryCode)
    {
        $this->fullName = $fullName;
        $this->countryCode = $countryCode;
    }

    // ? Get the full name of the character
    public function get_fullname()
    {
        return $this->fullName;
    }

    // ? Get the country code of the character
    public function get_countrycode()
    {
        return $this->countryCode;
    }
}
?>
