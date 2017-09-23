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

        <!-- <form class="form-basic" method="post" action="recommendation.php"> -->
				<form class="form-basic" action="recommendation.php">

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
										<select name="gender">
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
														<input type="radio" name="age" value="1">
														<span>퍼피</span>
												</label>
										</div>
										<div>
												<label>
														<input type="radio" name="age" value="2">
														<span>주니어</span>
												</label>
										</div>
										<div>
												<label>
														<input type="radio" name="age" value="3">
														<span>어덜트</span>
												</label>
										</div>
										<div>
												<label>
														<input type="radio" name="age" value="4">
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
										<select name="ingredient">
												<option value="1">상관없음</option>
												<option value="2">닭고기</option>
												<option value="3">오리고기</option>
												<option value="4">연어</option>
												<option value="5">소고기</option>
												<option value="6">양고기</option>
												<option value="7">칠면조고기</option>
										</select>
								</label>
						</div>

						<div class="form-row">
								<label>
										<span>활동량</span>
										<select name="active">
												<option value="1">일반적이다</option>
												<option value="2">활발한 편이다</option>
												<option value="3">얌전한 편이다</option>
										</select>
								</label>
						</div>

						<div class="form-row">
								<label>
										<span>중성화수술 여부</span>
										<select name="neutralization">
												<option value="1">중성화수술을 했다</option>
												<option value="2">중성화수술을 하지 않았다</option>
										</select>
								</label>
						</div>

						<div class="form-row">
								<label><span>비용(100g당)</span></label>
								<div class="form-radio-buttons">
										<div>
												<label>
														<input type="radio" name="cost" value="1">
														<span>500원 이하</span>
												</label>
										</div>
										<div>
												<label>
														<input type="radio" name="cost" value="2">
														<span>500원 ~ 1000원</span>
												</label>
										</div>
										<div>
												<label>
														<input type="radio" name="cost" value="3">
														<span>1000원 이상</span>
												</label>
										</div>
								</div>
						</div>

						<div class="form-row">
								<label>
										<span>기대효과</span>
										<select name="note">
												<option value="1">상관없음</option>
												<option value="2">장에좋은</option>
												<option value="3">기호성좋은</option>
												<option value="4">체중조절</option>
												<option value="5">영양식</option>
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
									<button type="submit">사료 추천 받기</button>
            </div>
        </form>

    </div>

</body>

</html>
