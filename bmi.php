<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BMI計算</title>
<link href="css/bmi.css" rel="stylesheet" type="text/css">
</head>
<header>
	
</header>
<body>
    <form action="bmia.php" method="post">
    	身長(cm) <input type="text" name="height" /><br/>
    	体重(kg) <input type="text" name="weight" /><br/>
    	性別<br/>
    	<input type="radio" name="gender" value="1"/>男<br/>
    	<input type="radio" name="gender" value="2"/>女<br/>
    	<input type="submit" value="計算する" />
    </form>
</body>
</html>