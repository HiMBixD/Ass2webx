<?php 
$db = parse_url(getenv("DATABASE_URL"));
	
			$pdo = new PDO("pgsql:" . sprintf(
			    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
			    $db["host"],
			    $db["port"],
			    $db["user"],
			    $db["pass"],
			    ltrim($db["path"], "/")
											)
						);
		
			$productid=$_GET['proid'];
			$sqlx = "SELECT * from product where ProductId = 10";
            $stmt1= $pdo->prepare($sqlx);
            $stmt1->setFetchMode(PDO::FETCH_ASSOC);
            $stmt1->execute();
            $producttable = pg_fetch_all($stmt1);
            echo "zxc"."<li> $producttable[0][0] </li>";
            echo "<li> $producttable[0][1] </li>";
            echo "<li> $producttable[1][0] </li>";
            echo "<li> $producttable[1][1] </li>";
            echo "<li> $producttable[2][0] </li>";
            echo "<li> $producttable[2][1] </li>";

 ?>