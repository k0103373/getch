<?php

$host = "localhost";
$user = "root";
$password = "kbkb6100";
$DB_name = "csv_db";

$conn = mysqli_connect($host, $user, $password, $DB_name);

if(mysqli_connect_errno($conn)){
	echo "실패";
}
else{
	echo "성공";
}
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>GETCH</title>
	<script src="assets/slideshow.js"> </script>
	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-basic.css">
	<link rel="stylesheet" href="assets/slideshow.css">


</head>
<body>



	<header>
		<h1>Getch</h1>
  </header>


    <div class="main-content">

        <form class="form-basic" method="get" action="#">

            <div class="form-title-row">
                <h1>추천된 사료는 다음과 같습니다</h1>
            </div>
						<div class="form-row">
								<?php
									$name = $_GET["name"];
									$age = $_GET["age"];
									$ingredient = $_GET["ingredient"];
									$cost = $_GET["cost"];

									if ($ingredient == 1)
									{
										$ingredient = "";
									}
									else if ($ingredient == 2)
									{
										$ingredient = "닭";
									}
									elseif ($ingredient == 3) {
										$ingredient = "오리";
									}
									elseif ($ingredient == 4) {
										$ingredient = "연어";
									}
									elseif ($ingredient == 5) {
										$ingredient = "소고기";
									}
									elseif ($ingredient == 6) {
										$ingredient = "양고기";
									}
									else
									{
										$age = "칠면조";
									}
							 	?>
						</div>
						<div class="form-row">
								<?php
									$note = $_GET["note"];
									$weight = $_GET["weight"];
									$active = $_GET["active"];
									$neutral = $_GET["neutralization"];
							?>
						</div>


		<?php
			if($age == 1)
			{
			 $sql = "SELECT * FROM `table 1` WHERE price <= 500 AND (ingredient1 like '%".$ingredient."%' OR  ingredient2 like '%".$ingredient."%' OR ingredient3 like '%".$ingredient."%') ORDER BY reputation DESC" ;
			}
			else if($age == 2)
			{
			 $sql = "SELECT * FROM `table 1` WHERE price > 500 AND price <= 1000 AND (ingredient1 like '%".$ingredient."%' OR  ingredient2 like '%".$ingredient."%' OR ingredient3 like '%".$ingredient."%') ORDER BY reputation DESC" ;
			}
			else
			{
			 $sql = "SELECT * FROM `table 1` WHERE price > 1000 AND (ingredient1 like '%".$ingredient."%' OR  ingredient2 like '%".$ingredient."%' OR ingredient3 like '%".$ingredient."%') ORDER BY reputation DESC" ;
			}

			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result);
			$row1 = mysqli_fetch_row($result);
			$row2 = mysqli_fetch_row($result);
		?>

		<div class="slideshow-container">
		  <div class="mySlides fade">
		    <div class="numbertext">1 / 3</div>
				<?php
				echo "<img src='./img/",$row[0],".jpg' style='width:100%'><br>";
				echo "<div class='text'>",$row[2],"</div>";
				?>
		  </div>

		  <div class="mySlides fade">
		    <div class="numbertext">2 / 3</div>
				<?php
				echo "<img src='./img/",$row1[0],".jpg' style='width:100%'><br>";
				echo "<div class='text'>",$row1[2],"</div>";
				?>
		  </div>

		  <div class="mySlides fade">
		    <div class="numbertext">3 / 3</div>
				<?php
				echo "<img src='./img/",$row2[0],".jpg' style='width:100%'><br>";
				echo "<div class='text'>",$row2[2],"</div>";
				?>
		  </div>

			<script> plusSlides(0); </script>
		  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span>
		  <span class="dot" onclick="currentSlide(2)"></span>
		  <span class="dot" onclick="currentSlide(3)"></span>
		</div>

        </form>

    </div>

</body>

</html>
