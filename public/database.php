<?php
/*
----Section 1 Begin----
This section instantiates the $db variable from the PDO class and established a connection to the db.
1) Start with the code inside the "try" block and "var_dump" the variable. 
NOTE: go to localhost/database.php and the screen will show a PDO object
2) Place the "try" block around that code if you see that you have successfully instantiated
the PDO class
3) Add the "catch" block to handle the exception. 
4) Outside the try/catch block echo a string like "Yes!" to veryify that the try/catch block is working
5) In the host section of the PDO object instantiation change localhost to brokenhost to 
	test the catch block. You should see the PDO object and "Could not connect to database!"
6) comment out the var_dump and the "Yes!" echo statement
7) Add another try/catch block and instantiate a PDO Statement variable [$results].
8) Place an exception in the catch block
9) var_dump $results with fetchAll() to the screen to verify that the SQL statement ran successfully.
10) 
*/
try {
	$db = new PDO("mysql:host=localhost;dbname=lingaladictionary;port=8889","root","root");
	//var_dump($db);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
	echo "Could not connect to database!"; 
	exit;
}
//echo "Yes!";

try {
	$results = $db->query("SELECT english, lingala FROM lingala ORDER BY english ASC");
	//echo "The query ran successfully.";
	//var_dump($db);
} catch (Exception $e){
	echo "Data could not be retrieved from the database."; 
	exit;
}
//echo "<pre>";
//var_dump($products = $results->fetchAll(PDO::FETCH_ASSOC));
//$products = $results->fetchAll(PDO::FETCH_ASSOC);
$products = $results->fetchAll(PDO::FETCH_ASSOC)

?>