<?php
$conn = mysqli_connect("localhost:3306", "root", 123456);
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
	<style type="text/css">
	 a:link { color: white; text-decoration: none;}
	 a:visited { color: white; text-decoration: none;}
	 a:hover { color: white; text-decoration: none;}
	</style>

</head>


	<header>
		<h1>Getch</h1>
  </header>


    <div class="main-content">

        <form class="form-basic" method="post" action="#">

            <div class="form-title-row">
                <h1>당신의 반려견에 대해 알려주세요</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>이름</span>
                    <input type="text" name="name">
                </label>
            </div>

						<div class="form-row">
								<label>
										<span>성별</span>
										<select name="dropdown">
												<option>수컷</option>
												<option>암컷</option>
										</select>
								</label>
						</div>

						<div class="form-row">
								<label><span>나이</span></label>
								<div class="form-radio-buttons">
										<div>
												<label>
														<input type="radio" name="radio">
														<span>퍼피</span>
												</label>
										</div>
										<div>
												<label>
														<input type="radio" name="radio">
														<span>주니어</span>
												</label>
										</div>
										<div>
												<label>
														<input type="radio" name="radio">
														<span>어덜트</span>
												</label>
										</div>
										<div>
												<label>
														<input type="radio" name="radio">
														<span>시니어</span>
												</label>
										</div>
								</div>
						</div>

						<div class="form-row">
								<label>
										<span>몸무게</span>
										<input type="text" name="weight">
								</label>
						</div>

						<div class="form-row">
								<label>
										<span>선호하는 고기</span>
										<select name="dropdown">
												<option>상관없음</option>
												<option>닭고기</option>
												<option>오리고기</option>
												<option>연어</option>
												<option>소고기</option>
												<option>양고기</option>
												<option>칠면조고기</option>
										</select>
								</label>
						</div>

						<div class="form-row">
								<label>
										<span>활동량</span>
										<select name="dropdown">
												<option>일반적이다</option>
												<option>활발한 편이다</option>
												<option>얌전한 편이다</option>
										</select>
								</label>
						</div>

						<div class="form-row">
								<label>
										<span>중성화수술 여부</span>
										<select name="dropdown">
												<option>중성화수술을 했다</option>
												<option>중성화수술을 하지 않았다</option>
										</select>
								</label>
						</div>

						<div class="form-row">
								<label><span>비용(100g당)</span></label>
								<div class="form-radio-buttons">
										<div>
												<label>
														<input type="radio" name="radio">
														<span>500원 이하</span>
												</label>
										</div>
										<div>
												<label>
														<input type="radio" name="radio">
														<span>500원 ~ 1000원</span>
												</label>
										</div>
										<div>
												<label>
														<input type="radio" name="radio">
														<span>1000원 이상</span>
												</label>
										</div>
								</div>
						</div>

						<div class="form-row">
								<label>
										<span>기대효과</span>
										<select name="dropdown">
												<option>상관없음</option>
												<option>장에좋은</option>
												<option>기호성좋은</option>
												<option>체중조절</option>
												<option>영양식</option>
										</select>
								</label>
						</div>

            <div class="form-row">
                <label>
                    <span>특이사항</span>
                    <textarea name="textarea"></textarea>
                </label>
            </div>


            <div class="form-row">
									<button type="button" onclick="location.href='recommendation.html'">사료 추천 받기
									<?php

									




									?>	


									</button>
            </div>
        </form>

    </div>

</body>

</html>
