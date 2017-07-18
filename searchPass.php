<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>パスワード探し</title>
<link href="css/searchPass.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- 英数字を呼び出して変数に保存（代入）しておく、毎回呼び出すと違ったパスワードになるため -->
	<p> <?php $ans = makeRandStr(); ?></p>
	<h4>パスワード探し</h4>
	
	<dev>
		<h5>解説</h5>
		<p>サイトのどこかにあるパスワードを探し出して入力し、一致するとクリアです。F12とか使わないで…</p>
	</dev>
	
	<form action="anser.php" method="post">
		<!-- 文字列をformに入れ、typeをhiddenにし隠して送信する-->
		<input type="hidden" name="anspass" value="<?php print $ans; ?>" />
		特定の文字列を入力
		<input type="text" name="pass" placeholder="例：password" />
		
		<input type="submit" value="解答" />
	</form>
	
	<a href="index.php">戻る</a>
	
	
	<footer>
		<!-- パスワードの表示、cssで文字色を背景と同じにしている（白） -->
		<p class="hidden-color"><?php print $ans; ?></p>
		<p class="hidden-color">色々試してみてください</p>
	</footer>

</body>
</html>
<!-- ランダムな英数字を返すユーザ定義関数 -->
<?php
function makeRandStr($length = 8) {
    static $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJLKMNOPQRSTUVWXYZ0123456789';
    $str = '';
    for ($i = 0; $i < $length; ++$i) {
        $str .= $chars[mt_rand(0, 61)];
    }
    return $str;
}
?>