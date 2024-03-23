/* The Product class in PHP defines properties and methods for managing product information in a
database, including saving new products and listing existing products. */
<?php
require_once("config/db.class.php");

class Product
{
    // ! Properties
    public $productID;     // Product ID
    public $productName;   // Product Name
    public $cateID;        // Category ID
    public $price;         // Price
    public $quantity;      // Quantity
    public $description;   // Description
    public $picture;       // Picture

    // ? Constructor
    public function __construct(
        $pro_name,    // Product Name
        $cate_id,     // Category ID
        $price,       // Price
        $quantity,    // Quantity
        $desc,        // Description
        $picture      // Picture
    ) {
        $this->productName = $pro_name;  // Set Product Name
        $this->cateID = $cate_id;        // Set Category ID
        $this->price = $price;           // Set Price
        $this->quantity = $quantity;     // Set Quantity
        $this->description = $desc;      // Set Description
        $this->picture = $picture;       // Set Picture
    }

    // * Save product
    public function save()
    {
        // Initialize $db object with class Db from file db.class.php
        $db = new Db();
        
        // SQL query to insert product into the database
        $sql = "INSERT INTO product (ProductName, CateID, Price, Quantity, Description, Picture) 
                VALUES ('$this->productName', '$this->cateID', '$this->price', '$this->quantity', 
                '$this->description', '$this->picture')";
        
        // Execute the query using query_execute method from Db class
        $result = $db->query_execute($sql);
        
        // Return the result
        return $result;
    }

    // FIXME: List of products
    public static function list_product()
    {
        $db = new DB(); // Create a new instance of the Db class
        $sql = "SELECT * FROM product"; // SQL query to select all products
        // Execute the query and return the result as an array using select_to_array method from Db class
        $rs = $db->select_to_array($sql);
        return $rs;
    }
}
?>
