<?php include("variables.php"); ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>MPL's Finest - Old, but not obsolete!</title>
  </head>
  <body>
  	<?php include("navbar.php"); ?>
  	<br/>
  	<center>
    <h1>

		<?php

			// comments
			echo "MPL's Finest - Old, but not obsolete!</br></br></br></br>";
			$favourite_number = 41;
			
			// Math operators
			// + - * / % **
			$num_1 = 40;
			$num_2 = 5;
			$first_name = "John";
			$last_name = "Elder";

			/*
			echo $num_1; echo "<br/>";
			++$num_1;
			echo $num_1; echo "<br/>";
			--$num_1;
			echo $num_1--; echo "<br/>";
			echo $num_1; echo "<br/>";
			*/


			// concantenation

			/*
			echo $first_name . " " . $last_name . "<br/>";
			echo $num_1 . " " . $num_2 . "<br/>";
			*/

			
			/*
			//comparison operators
			//  ==  !=  >  <  >=  <=
			var_dump($num_1 == $num_2);
			var_dump($first_name == "John");
			*/


			// escape characters
			# echo '<br/> And then she said: "you are ugly"<br/>';


			// If Else statements
			/*
			if ($num_1 > $num_2) {
				echo "<br/>$num_1 > $num_2";
			} else {
				echo "<br/>$num_1 < $num_2";
			}
			*/


			// If Elseif statements
			/*
			if ($num_1 < $num_2) {
				echo $num_1 . " is less than $num_2";
			} elseif ($num_2 == 5) {
				echo $num_2 . " equals 5";
			} else {
				echo $num_1 . " > $num_2";
			}
			*/


			/*
			// Arrays - numeric
			$man_name = "Steeve";
			$last_names = array("one", "two", "three");
			$first_names = array("John", $man_name, 51, $last_names);
			echo $first_names[1];  // second element
			echo ++$first_names[2];
			echo $first_names[3][1];
			*/


			/*
			// Arrays - associative  +  array count
			$keys_array = array("first", "2", "third", "fourth");
			$fav_pizza = array(
				"John" => "Pepperoni<br/>", 
				"Steeve" => "Cheese<br/>",
				"Marry" => "Mushroom<br/>",
				$keys_array[1] => "second element of keys_array<br/>"
			);
			echo $fav_pizza["John"];
			echo $fav_pizza["2"];
			echo count($fav_pizza);  // count array elements
			echo $keys_array[count($keys_array) - 1];	// print last element of array
			*/


			/*
			// Loops  -  While  +  Do-While
			$counter = 0;
			while ($counter < 10) {
				echo "the count is: $counter<br/>";
				$counter++;
			};
			echo "next is Do-While<br/>";
			do {
				echo "the count is: $counter<br/>";
				$counter++;
			} while ($counter <= 15);
			*/


			/*
			// Loops  -  For
			for ($count = 0; $count <= 10; $count++) {
				echo "The \$count is $count <br/>";
			}
			*/



			/*
			// Loops  -  Foreach
			$names = array("John", "Steve", "Mary");
			foreach ($names as $value) {
				echo "$value <br/>";
			}
			*/


			/*
			// Functions
			function helloThere($name, $surname) {
				echo "Hello There, $name $surname! <br/>";
			}
			helloThere("John", "Smith");
			function hello($n1, $n2) {
				return $n1 * $n2;
			}
			$multiply = hello(7, 3);
			echo $multiply;
			echo "<br/>";
			echo hello(5, 6);
			
			// Random Function
			echo rand();
			echo "<br/>";
			echo rand(0, 100);
			echo "<br/>";
			echo mt_rand(0, 10);
			echo "<br/>";
			$names = array("John", "Steve", "Mary");
			echo $names[mt_rand(0, 2)];
			echo "<br/>";
			$rand = mt_rand(0,2);
			echo $names[$rand];
			echo "<br/>";
			
			// Date Function
			echo date("Y") . "<br/>";
			echo date("y") . "<br/>";
			echo date("l jS \of F, Y") . "<br/>";
			$today = date('D');
			echo "Today is $today (" . date('l') . ")<br/>";
			
			// String Manipulation
			$stuff = "john Elder is a PHP Coding Monster";
			$monstrer = "MonsteR";
			$dork = "MasteR";
			echo str_replace("Monster", "Dork", $stuff) . "<br/>";
			echo str_replace($monstrer, $dork, $stuff) . "<br/>";
			echo strtoupper($stuff) . "<br/>";
			echo ucwords($stuff) . "<br/>";
			echo ucfirst($stuff) . "<br/>";
			echo strtolower($stuff) . "<br/>";
			echo lcfirst($dork) . "<br/>";
			echo strlen($stuff) . "<br/>";
			echo str_shuffle($stuff) . "<br/>";
			
			// Include Function
			echo 'Copyright (c) ' . $company_name . " " . date("Y") . ' - All rights reserved';
			*/


			// Stuff

			




			/* just testing

			// go through array with FOR Loop
			$names = array("John", "Steve", "Mary", "Ivan", "Peter", "Gosho");
			//$gg = "";
			for ($i=0; $i < count($names); $i++) { 
				if ($i == 0) {
					$gg = "-st";
				} elseif ($i == 1) {
					$gg = "-nd";
				} elseif ($i == 2) {
					$gg = "-rd";
				} else {
					$gg = "-th";
				}
				echo "the " . ($i+1) . "$gg element of the array is:  $names[$i] <br/>";
			}

			*/

		?>

	</h1>
	</center>


	<div class="container">
		Some random stuff....
	</div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <hr>
    <center><?php include("footer.php"); ?></center>
  </body>
</html>