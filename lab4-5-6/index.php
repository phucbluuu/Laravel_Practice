/* The code you provided is a PHP script that includes the contents of "header.php" at the beginning
and "footer.php" at the end. In between, it displays an unordered list (<ul>) with two list items
(<li>), each containing an anchor (<a>) tag linking to different pages related to products. */
<?php
include_once("header.php");
?>
<!-- lab 4 là 4,5,6 -->
<ul>
    <li>
        <a href="product-list.php">List of products</a>
    </li>

    <li>
        <a href="product-add.php">More products</a>
    </li>

</ul>

<?php
include_once("footer.php");
?>