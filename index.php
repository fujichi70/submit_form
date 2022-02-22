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
	<form action="complete.php" method="post">
		<table>
			<tr>
				<td>タイトル</td>
				<td><input name="title" cols="30" rows="10" placeholder="タイトル"></textarea></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input name="email" cols="30" rows="10" placeholder="Emailアドレス"></textarea></td>
			</tr>
			<tr>
				<td valign="top">お問い合わせ内容</td>
				<td><textarea name="content" cols="30" rows="10" placeholder="お問い合わせ内容（1000文字まで）お書きください"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="button">送信</button></td>
			</tr>
		</table>
	</form>
</body>

</html>