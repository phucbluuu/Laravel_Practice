<?php
class Db
{
/* The code snippet you provided is a PHP class named `Db` that handles database operations. Here's an
explanation of the code: */
    // ! Database connection variable
    protected static $connection;

    // ? Connection initialization function
    public function connect()
    {
        // Connect to MySQL database
        $connection = mysqli_connect(
            "localhost",   // Host
            "root",        // Username
            "",            // Password
            "demo_lap3"    // Database name
        );

        // Set connection character set
        mysqli_set_charset($connection, 'utf8');

        // Check for connection errors
        if (mysqli_connect_errno()) {
            echo "Database connection failed: " . mysqli_connect_error();
        }

        // Return connection
        return $connection;
    }

 /**
  * The query_execute function executes a query statement using mysqli library and returns the result.
  * 
  * @param queryString The `query_execute` function you provided is responsible for executing a query
  * statement using the mysqli library. It first establishes a connection, executes the query, closes
  * the connection, and then returns the result.
  * 
  * @return The `query_execute` function returns the result of executing the query statement provided
  * as a parameter.
  */
    // * Execute query statement
    public function query_execute($queryString)
    {
        // Initialize connection
        $connection = $this->connect();

        // Execute query, using mysqli library's query function
        $result = $connection->query($queryString);

        // Close connection
        $connection->close();

        // Return result
        return $result;
    }

   /**
    * The function `select_to_array` executes a query and returns the results as an array of result
    * lists.
    * 
    * @param queryString The `select_to_array` function you provided seems to be a method in a class
    * that executes a query and returns the results as an array of result lists.
    * 
    * @return An array of result lists is being returned by the `select_to_array` function.
    */
    // FIXME: Implementation function returns an array of result lists
    public function select_to_array($queryString)
    {
        $rows = array();
        $result = $this->query_execute($queryString);

        // Check if query execution failed
        if ($result == false) return false;

        // Loop through result and add to array
        while ($item = $result->fetch_assoc()) {
            $rows[] = $item;
        }

        // Return result array
        return $rows;
    }
}
?>
