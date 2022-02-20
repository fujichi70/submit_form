<?php

header('X-FRAME-OPTIONS:DENY');
// iframeが入れられないようにする→クリックジャッキング対策

?>


<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>送信フォーム</title>
</head>

<body>
	<h1>メール送信画面</h1>
	<form action="○○.php" method="post">
		<!-- value内でXSS対策のためエスケープ処理 -->
		<label for="name">氏名</label><br>
		<input type="text" id="name" name="name" placeholder="山田太郎" value="<?php if (!empty($_POST['name'])) {
																				echo htmlspecialchars($_POST['name']);
																			} ?>" /><br>
		<br>
		<label for="email">メールアドレス</label><br>
		<input type="text" id="email" name="email" placeholder="test@test.com" value="<?php if (!empty($_POST['email'])) {
																							htmlspecialchars($_POST['email']);
																						} ?>" /><br>
		<br>
		<label for="contents">内容</label><br>
		<textarea name="contents" id="contents" cols="30" rows="10"><?php if (!empty($_POST['contents'])) {
																		echo htmlspecialchars($_POST['contents']);
																	} ?></textarea><br>
		<br>
		<input type="submit" value="送信する" />
	</form>
</body>

</html>