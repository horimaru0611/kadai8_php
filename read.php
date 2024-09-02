<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/read.css">
</head>

<body>
    <h1>アンケート結果</h1>

    <div class="meyasu">4~7点:習慣の見直しは不要　8~14点:一部習慣の見直しが必要　15~20点:習慣の見直しが必要</div>

    <table>
  <tr>
    <th> 送信日時</th>
    <th> 名前 </th>
    <th> メールアドレス </th>
    <th> Q1.運動の習慣はありますか？ </th>
    <th> Q2.平均睡眠時間はどのくらいですか？ </th>
    <th> Q3.飲酒の習慣はありますか？ </th>
    <th> Q4.喫煙の習慣はありますか？ </th>
    <th> 合計点</th>
    <th> 総評</th>
  </tr>


  

 <?php
$file = fopen('data/data.txt', 'r'); // ファイルを開く

$q1 =["(1)ほぼ毎日","(2)週２～３日","(3)週１日程度","(4)不定期に実施","(5)全くしない"];
$q2 =["(1)７～８時間程度","(2)６～７時間程度","(3)５～６時間程度","(4)４～５時間程度","(5)４時間未満"];
$q3 =["(1)全く飲まない","(2)ほとんど飲まない","(3)週１～３日程度飲む","(4)週５日以上飲む","(5)毎日飲む"];
$q4 =["(1)全く吸わない","(2)もらいタバコ程度","(3)週１で１箱程度","(4)２～３日で1箱程度","(5)１日１箱以上"];

$kekka = ["習慣の見直しは不要","一部習慣の見直しが必要","習慣の見直しが必要"];


// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    echo "<tr>";
    $str_2 =explode(",",$str); //1行ずつ 「,」で要素を区切って配列にする
    // var_dump($str); 

    $str_3[0]= $str_2[0];
    $str_3[1]= $str_2[1];
    $str_3[2]= $str_2[2];
    $sum = 0;

        for($j=1;$j<6;$j++){
       if($str_2[3]==$j){
        $str_3[3]= $q1[$j-1];
       }
    }
    
    for($j=1;$j<6;$j++){
        if($str_2[4]==$j){
         $str_3[4]= $q2[$j-1];
        }
     }

     for($j=1;$j<6;$j++){
        if($str_2[5]==$j){
         $str_3[5]= $q3[$j-1];
        }
     }
     for($j=1;$j<6;$j++){
        if($str_2[6]==$j){
         $str_3[6]= $q4[$j-1];
        }
     }

     for($i=3;$i < count($str_2);$i++){
        $sum = $sum + $str_2[$i];
     }

     $str_3[7]= $sum;
     
     if($sum<=7){
        $str_3[8]=$kekka[0];
     }elseif($sum<=14){
        $str_3[8]=$kekka[1];
     }else{
        $str_3[8]=$kekka[2];
     }


    

for ($i=0; $i < count($str_3); $i++) { 
    echo "<td>".$str_3[$i]."</td>"; // 配列の要素を順番に表にする
}
echo "</tr>";
};

fclose($file); // ファイルを閉じる

?>



<ul class="form_style">
    <a href="post.php">入力画面へ戻る</a>
  </ul>

  <!-- <div class="gurafu"> 
  <table>
  <tr>
    <th> 送信日時</th>
    <th> 名前 </th>
    <th> メールアドレス </th>
    <th> 合計点</th>

  </tr>
  </div> -->
    
</body>
</html>