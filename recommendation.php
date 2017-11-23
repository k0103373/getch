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

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-basic.css">

</head>
<body>



	<header>
		<h1>Getch</h1>
  </header>


    <div class="main-content">

        <form class="form-basic" method="get" action="#">

            <div class="form-title-row">
                <h1>추천된 사료는 다음과 같습니다111</h1>
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
									echo "이름: ", $name;
									echo "나이: ", $age;
									echo "선호하는 고기: ", $ingredient;
									echo "비용: ", $cost;

							 	?>
						</div>
						<div class="form-row">
								<?php
									$note = $_GET["note"];
									$weight = $_GET["weight"];
									$active = $_GET["active"];
									$neutral = $_GET["neutralization"];
									echo "몸무게: ", $weight;
									echo "기대효과: ", $note;
									echo "활동량: ", $active;
									echo "중성화수술 여부: ", $neutral;
							
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

     echo "<img src='./img/",$row[0],".jpg' >",$row[2],"<br>";
     echo "<img src='./img/",$row1[0],".jpg' >",$row1[2],"<br>";
     echo "<img src='./img/",$row2[0],".jpg' >",$row2[2];

	?>

        </form>

    </div>

</body>

</html>
