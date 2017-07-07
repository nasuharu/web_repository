<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BMI計算</title>
</head>

<body>

<?php
  $height=$_POST['height'];
  $weight=$_POST['weight'];
  $sei=$_POST['gender'];
  $height=$height/100;
  $bmi=$weight/($height*$height);
  $bmi=round($bmi,1);

  if($sei == 1){
   if($bmi >= 33){ $bodyType = "肥満"; }
   else if($bmi >= 23){ $bodyType = "プチ肥満"; }
   else if($bmi >= 21){ $bodyType = "標準"; }
   else { $bodyType = "痩せ型"; }
  }
  else if($sei == 2){
   if($bmi >= 30){ $bodyType = "肥満"; }
   else if($bmi >= 20){ $bodyType = "プチ肥満"; }
   else if($bmi >= 18.5){ $bodyType = "標準"; }
   else { $bodyType = "痩せ型"; }
  }
  else{}

//結果出力
print "BMI=".$bmi."です。<br />";
print "体型は".$bodyType."です。<br />";
?>
</body>
</html>