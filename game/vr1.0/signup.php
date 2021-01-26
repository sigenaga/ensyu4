<!DOCTYPE html>

<html lang="ja">

<head>
<link rel="stylesheet" href="signup2.css"> 
<title>
ユーザー登録
</title>
<meta charset="utf-8">
</head>

<body>
<h1><span>ユーザー登録</span></h1>

<?php

 // データベースへの接続
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2020 user=enuser2020 password=enpass2020");
if ($con == false){
    print(" <div class=\"input_wrap\">"); 
  print("DATABASE CONNECTION ERROR\n");
  print("</div>");
  exit;
}


$sql2 = "create table ".$_POST['uname']." (id int, pass text)"; // ユーザ名のテーブルを作成する。列はidとpassで、型はどちらもint。

print(" <div class=\"input_wrap\">"); 
print "<span>".$sql2."</span><br>";
print(" </div>");

@$result = pg_query($sql2); // SQLのコマンドでデータベースに問い合わせする。
if($result == false)
{
  print(" <div class=\"input_wrap\">"); 
  print"<span>TABLE CREATION ERROR</span>";
   print "<div class=\"wrap\">";
  print "<button class=\"button\"><a href=\"http://133.54.224.240/penshu4_2020/67190272/last/main.php\">　　　戻る　　　</button></a>\n";
  print("</div>");
  print(" </div>");
  exit;
}

$sql2 = "drop table ".$_POST['uname'];
@$result = pg_query($sql2); 

pg_free_result($result); // SQLの実行結果を格納していたメモリを解放。







$sql1 = "select uname from passdb where uname = '{$_POST['uname']}'"; // SQLのコマンド文を文字列に格納する。

 print(" <div class=\"input_wrap\">"); 
 print ("<span>");
print $sql1."<br>";
 print ("</span>");
 print("</div>");

@$result = pg_query($sql1); // SQLのコマンドでデータベースに問い合わせする。
if($result == false){
  print"DATA ACQUISITION ERROR\n";
   print "<div class=\"wrap\">";
  print "<button class=\"button\"><a href=\"http://133.54.224.240/penshu4_2020/67190272/last/main.php\">　　　戻る　　　</button></a>\n";
  print("</div>");
  exit;
}

$row = pg_num_rows($result);

pg_free_result($result); // SQLの実行結果を格納していたメモリを解放。

if($row > 0){ // 入力されたユーザ名が、データベースの中に１つ以上ある時は「登録済み」

  pg_close($con); // データベースとの接続を閉じる。
   print(" <div class=\"input_wrap\">"); 
  print ("<span>");
  print "<p>\n";
  print "そのユーザ名は登録済みです。\n";
  print "</p>\n";
 print ("</span>");
 
  print "<p>\n";
  print "<div class=\"wrap\">";
  print "<button class=\"button\"><a href=\"http://133.54.224.240/penshu4_2020/67190272/last/main.php\">　　　戻る　　　</button></a>\n";
  print("</div>");
  print "</p>\n";
print("</div>");

  print "</body>\n";

  print "</html>\n";

  exit;
}



$sql1 = "insert into passdb values('".$_POST['uname']."','".$_POST['pass']."',10)"; // テーブルpassdbに、ユーザ名とパスワードを登録する。
print(" <div class=\"input_wrap\">"); 
print "<span>".$sql1."</span><br>";
print("</div>");
@$result = pg_query($sql1); // SQLのコマンドでデータベースに問い合わせする。
if($result == false){
  print"DATA INSERTION ERROR\n";
   print "<div class=\"wrap\">";
  print "<button class=\"button\"><a href=\"http://133.54.224.240/penshu4_2020/67190272/last/main.php\">　　　戻る　　　</button></a>\n";
  print("</div>");
  exit;
}
pg_free_result($result); // SQLの実行結果を格納していたメモリを解放。



pg_close($con); // データベースとの接続を閉じる。
?>

 <div class="input_wrap">
<p>
<span>ユーザを登録しました。</span>
</p>

<p>

<a href="http://133.54.224.240/penshu4_2020/67190272/last/main.php"><span>戻る</span></a>
</p>
   </div>

</body>

</html>
