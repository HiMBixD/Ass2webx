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

			$sqlx = "SELECT * from product";
            $stmt1= $pdo->prepare($sqlx);
            $stmt1->execute();
            $producttable =$stmt1->pg_fetch_all_columns();

 ?>
 <li><?=$producttable[0]?></li>
 <li><?=$producttable[1]?></li>
 <li><?=$producttable[2]?></li>
 <li><?=$producttable[10]?></li>
 <li><?=$producttable[0][0]?></li>
 <li><?=$producttable[0][1]?></li>
 <li><?=$producttable[1][0]?></li>
 <li><?=$producttable[1][1]?></li>
 <li><?=$producttable[2][0]?></li>
 <li><?=$producttable[2][1]?></li>