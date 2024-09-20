<?php
//データをとる4つの項目
$number = $_POST["number"];
$name = $_POST["name"];
$mail= $_POST["mail"];
$liveDate = $_POST["liveDate"];

$c = ","; //cはカンマのc
//文字を作成する
$str = $number.$c.$name.$c.$mail.$c.$liveDate;

//ファイル書き込み。次の3行はセットで使う
$file = fopen("data.csv", "a");//dataというcsvのファイルを開いて、addの作業をしていく
            //"data.csv"はファイル名、"a"はaddの意味で追加書き込み、"r"の場合はreadの意味で読み込み
fwrite($file, $str."\n");//上の行で開いたfileに、指定した$strの内容をaddする。"\n"は改行の意味
fclose($file);//ファイルを閉じる

header("Location: index.php");//上記の作業が終わったら、index.phpの画面に戻る
exit;//プログラムを終了する
?>