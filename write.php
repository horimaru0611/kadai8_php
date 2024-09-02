<?php

$name =$_POST["name"];
$mail = $_POST["mail"];
$unndou =$_POST["運動"];
$suiminn = $_POST["睡眠"];
$innsyu =$_POST["飲酒"];
$kituenn = $_POST["喫煙"];

//文字作成
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$unndou.",".$suiminn.",".$innsyu.",".$kituenn;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/write.css">
<title>File書き込み</title>
</head>
<body>

<h1>送信しました</h1>

<ul>
<a href="read.php">アンケート結果を見る</a>
</ul>
</body>
</html>