<?php
$conn = mysqli_connect("localhost", "root", 123456);
mysqli_select_db($conn, "test");
$result = mysqli_query($conn, "SELECT * FROM table1");
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
                <h1>추천된 사료는 다음과 같습니다</h1>
            </div>
						<div class="form-row">
								<?php
									$name = $_GET["name"];
									$age = $_GET["age"];
									$ingredient = $_GET["ingredient"];
									$cost = $_GET["cost"];
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
						<!-- 	<?php
 $sql = "SELECT * FROM" ;
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
 ?> -->

        </form>

    </div>

</body>

</html>
