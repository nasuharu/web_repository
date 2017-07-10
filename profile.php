<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>プロフィール</title>
<link href="css/profile.css" rel="stylesheet" type="text/css">
</head>
<header>
	<nav>
		
	</nav>
</header>
<body>
	<dev class="mainbox1">
		<dev class="box1">
		<h3>profile</h3>
		<h5>生年月日</h5>
		<p>1996.10.25</p>
		<p>ちなみにあなたの生年月日はいつなの？</p>
		<form action="profile.php" method="post">
    		<input type="text" name="birth" placeholder="例：19961025">
    		<input type="submit" name="send" value="送信">
		</form>
		<?php
		if(isset($_POST['birth'])){
			$now = date("Ymd"); 
			$birth = $_POST['birth'];?>
			あなたの年齢は…<?php 
			if( floor(($now-$birth)/10000) < 0){
				?>ん？おぬし、未来人か？<?php
			} 
			else{ echo floor(($now-$birth)/10000) ?> ですね？年がばれましたね？？？<?php }
		}
		else{ ?>
				</br> <?php
			}
			$birth=NULL; ?>
		</dev>
		<dev class=box2>
		<h5>趣味</h5>
		<ul class="table">
			<li><p>プログラミング</p></li>
			<li><p>映像制作</p></li>
			<li><p>木登り（小学生の頃）</p></li>
			<li><p>おしゃべり</p></li>
		</ul>
		</dev>
		<dev class="box3">
		<h5>性格</h5>
		<ul>
			<li><p>比較的短気</p></li>
			<li><p>わがまま</p></li>
			<li><p>態度がでかい</p></li>
			<li><p>甘えん坊</p></li>
		</ul>
		</dev>
	</dev>
	<dev class="mainbox2">
		<dev class="box4">
			<h3>日々の活動</h3>
			<p>プロジェクトは株式会社CirKitに一年次から所属しています。主に動画の制作をメインで活動してきました。主な活動として金沢工業大学の学食を運営している方からのサイネージ利用の依頼から企画を立案し、CirKitのサイネージ部とシステム部がそれぞれ広告、システム設計に分かれて<a href="https://sakito.cirkit.jp/">SAKITO</a>システムを作り上げてきました。アンケートに答えるだけでKITランチ一杯無料のチャンスを得ることができます。金沢工業大学の学生・教職員が利用できます！（@planet.kanazawa-it.ac.jp , @neptune.kanazawa-it.ac.jp のメールアドレスを所持している者）この機会に是非利用してみてください！以下は学食で実際に使用されている宣伝動画です。要インターネット接続</p>
			<iframe src="https://drive.google.com/file/d/0ByOtsWB-anLkaXMyTGs3cnpVYk0/preview" width="960" height="540"></iframe>
		</dev>
	</dev>
	
</body>
<footer>
	<a href="index.php">戻る</a>
</footer>
</html>