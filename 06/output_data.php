<?php

$name = $_POST["name"];
$kana = $_POST["kana"];
$mail = $_POST["mail"];
$birthday = $_POST["birthday"];

//$lines = file('.data/data.csv');
// 
//foreach($lines as $line){
//    $data = explode(',',$line);
//    echo '<p>';
//    echo 'name',$data[0];
//    echo 'kana：',$data[1];
//    echo 'mail：',$data[2];
//    echo 'birthday';$data[3];
//    echo '</p>';
//}

?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>


<ul>
<li>お名前：<?php echo $name ;?></li>
<li>フリガナ：<?php echo $kana ;?></li>
<li>メール：<?php echo $mail ;?></li>
<li>誕生日：<?php echo $birthday ;?></li>
</ul>
    
    
</body>
</html>