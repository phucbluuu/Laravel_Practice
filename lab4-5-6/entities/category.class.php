/* The Category class in PHP defines properties and methods for managing categories, including saving
new categories to a database and listing existing categories. */
<?php
require_once("config/db.class.php");

class Category
{
    // ! Properties
    public $cateId;   // Category ID
    public $cateName; // Category Name
    public $cateDes;  // Category Description

    // ? Constructor
    public function __construct(
        $cate_name, // Category Name
        $cate_des   // Category Description
    ) {
        $this->cateName = $cate_name; // Set Category Name
        $this->cateDes = $cate_des;   // Set Category Description
    }

    // * Save Category
    public function save()
    {
        $db = new Db(); // Create a new instance of the Db class

        // SQL query to insert category into the database
        $sql = "INSERT INTO category (CategoryName, Description) VALUES ('$this->cateName','$this->cateDes')";
        
        // Execute the query using query_execute method from Db class
        $result = $db->query_execute($sql);
        
        // Return the result
        return $result;
    }

    // List of categories
    public static function list_category()
    {
        $db = new DB(); // Create a new instance of the Db class
        $sql = "SELECT * FROM category"; // SQL query to select all categories
        // Execute the query and return the result as an array using select_to_array method from Db class
        $rs = $db->select_to_array($sql);
        return $rs;
    }
}
?>
