<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
</head>
<body>
<form action="write.php" method="post">
	<h1>健康状態アンケート</h1>
	お名前: <input type="text" name="name">
	EMAIL: <input type="text" name="mail">

	
	<p>Q1.運動の習慣はありますか？</p>
      <input type="radio" name="運動" value="1" checked>(1)ほぼ毎日<br>
      <input type="radio" name="運動" value="2">(2)週２～３日<br>
      <input type="radio" name="運動" value="3">(3)週１日程度<br>
	  <input type="radio" name="運動" value="4">(4)不定期に実施<br>
	  <input type="radio" name="運動" value="5">(5)全くしない<br>
    <p>Q2.平均睡眠時間はどのくらいですか？</p>
      <input type="radio" name="睡眠" value="1" checked>(1)７～８時間程度<br>
      <input type="radio" name="睡眠" value="2">(2)６～７時間程度<br>
      <input type="radio" name="睡眠" value="3">(3)５～６時間程度<br>
	  <input type="radio" name="睡眠" value="4">(4)４～５時間程度<br>
	  <input type="radio" name="睡眠" value="5">(5)４時間未満<br>
	<p>Q3.飲酒の習慣はありますか？</p>
      <input type="radio" name="飲酒" value="1" checked>(1)全く飲まない<br>
      <input type="radio" name="飲酒" value="2">(2)ほとんど飲まない<br>
      <input type="radio" name="飲酒" value="3">(3)週１～３日程度飲む<br>
	  <input type="radio" name="飲酒" value="4">(4)週５日以上飲む<br>
	  <input type="radio" name="飲酒" value="5">(5)毎日飲む<br>
	<p>Q4.喫煙の習慣はありますか？</p>
      <input type="radio" name="喫煙" value="1" checked>(1)全く吸わない<br>
      <input type="radio" name="喫煙" value="2">(2)もらいタバコ程度<br>
      <input type="radio" name="喫煙" value="3">(3)週１で１箱程度<br>
	  <input type="radio" name="喫煙" value="4">(4)２～３日で1箱程度<br>
	  <input type="radio" name="喫煙" value="5">(5)１日１箱以上<br>
	<input type="submit" value="送信">
</form>
<ul>
<a href="read.php">アンケート結果を見る</a>
</ul>
</body>
</html>