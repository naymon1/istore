<?php 

define ('DBNAME', 'test');
define ('DBUSER', 'root');
define ('DBPASS', 'naymon');

try{
	#prepare a pdo instance

    $pdo = new PDO('mysql:host=localhost; dbname='"test.php", "root","naymon");

    # set verbose error modes
    $dbh-setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

} catch(PDOException $e){
	echo $e->getMessage();
}

?>