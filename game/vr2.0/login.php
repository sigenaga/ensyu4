<!DOCTYPE html>

<html lang="ja">

<head>
 <link rel="stylesheet" href="signup.css">
<title>
ログイン画面
</title>
<meta charset="utf-8">
</head>

<body>
<h1><span>ログイン画面</span></h1>

<?php

 // データベースへの接続
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2020 user=enuser2020 password=enpass2020");
if ($con == false){
  print("<span>".$_POST['uname']."はデータにありません</span>");
  exit;
}


$sql1 = "select * from passdb where uname = '".$_POST['uname']."' and pass ='".$_POST['pass']."'";

print "<span>".$sql1."</span><br>";

$result = pg_query($sql1); // SQLのコマンドでデータベースに問い合わせする。

print "<span>".@$result."</span>";

@$count = pg_num_rows($result);//レコードがあるか判断する



if($count == null)
    {
      print("<span>DATABASE CONNECTION ERROR</span>");
      print "<br>";
      print("<a href=\"http://133.54.224.240/penshu4_2020/67190272/last/main.php\"><span>戻る</span>");
      
  exit;
}
pg_free_result($result); // SQLの実行結果を格納していたメモリを解放


pg_close($con); // データベースとの接続を閉じる。


?>

<p>
<span>ログインします</span>
</p>

<?php
//min.phpにユーザとパスワードの値を渡す

print ("<form action =\"main.php\" method=\"post\">");
print "<br>";
print("<input type = \"hidden\" name = \"uname\" value=".$_POST['uname'].">");
print("<input type=\"hidden\" name=\"pass\" value=".$_POST['pass']."><br>");

print ("<input type = \"submit\" value=\"戻る\">");

?>

</body>

</html>
