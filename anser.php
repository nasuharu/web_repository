<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>結果</title>
</head>

<body>

<?php
	//変数に値を代入
	$pass = $_POST["pass"];
	$anspass = $_POST["anspass"];
	//値が同じならtrue、違うならfalseを返す条件分岐
	if(preg_match("/$anspass/",$pass)){
		for($i=1;$i<10;$i++){
			?>
			<!-- 画像を表示 -->
			 <img src="images/aimage<?php print $i; ?>.png"> <?php
		}?>
		<a href="index.php">ホーム</a>
		<?php 
	}
	else{
		for($i=1;$i<6;$i++){
			?> <img src="images/image<?php print $i; ?>.png"> <?php
		}
	}
	
?>
	<a href="searchPass.php">もう一度</a>

</body>
</html>