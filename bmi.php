<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BMI計算</title>
</head>
<header>
	
</header>
<body>
    <form action="bmia.php" method="post">
		<p class="hosoku">※必須項目</p>
    	※身長(cm) <input type="text" name="height" placeholder="例：160" required/><br/>
    	※体重(kg) <input type="text" name="weight" placeholder="例：50" required/><br/>
    	※性別<br/>
    	<input type="radio" name="gender" value="1" required/>男<br/>
    	<input type="radio" name="gender" value="2" required/>女<br/>
    	<input type="submit" value="計算する" />
    </form>
    <a href="index.php">戻る</a>
</body>
</html>