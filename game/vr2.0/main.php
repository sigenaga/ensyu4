<!DOCTYPE html>

<html lang="ja">

      <head>
     <link rel="stylesheet" href="main.css">
      <title>
      game
      </title>
      <meta charset="utf-8">
      </head>

      <body>
<?php
      print "<h1><span>USER: ".$_POST['uname']."</span></h1>";

print "<div align=\"right\"><a href=\"http://133.54.224.240/penshu4_2020/67190272/last/main.php\" class=\"btn-cross\">
Log out
</a></div>";
?>
    
      <br>
    
     

      
<?php
         @$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2020 user=enuser2020 password=enpass2020");
        if ($con == false)
        {
            print("DATABASE CONNECTION ERROR\n");
            exit;
        }



      if(isset($_POST['uname']))
          {
             
              $sql1 = ("select coin from passdb where uname ='".$_POST['uname']."'");

              $reseut = pg_query($sql1);

              $number_of_coins = pg_fetch_result($reseut,0,0);//コインの枚数を取得して、number_of_coinsに代入
              pg_free_result($reseut);
pg_close($con); // データベースとの接続を閉じる。

print "<br>";
print "<white><b>ルール説明</b></white>";
print "<br>";



print "まずかけるコインの枚数を決めてください（べットする）";
print "<br>";
print "<white>5枚のカードが配られます</white>";
print "<br>";
print "<white>カードを「のこす」か「かえる」か選択してください</white>";
print "<br>";
print "<white>「かえる」を選択したカードは再び配り直されます</white>";
print "<br>";
print "<white>最終的な5枚で役を決定します</white>";
print "<br>";
print "<white>その役に応じてべットしたコインの１倍〜５００倍を貰うことが出来ます</white>";
print "<br>";
print "<white>もし勝利した場合、獲得したコインを賭けてダブルアップチャンスに挑戦することが出来ます</white>";
print "<br>";
print "<br>";
print "<white><b>ダブルアップチャンス</b><white>";
print "<br>";
print "<white>ダブルアップチャンスとは、獲得したコインが０になるか２倍になるかを賭けた勝負です</white>";
print "<br>";
print "カードが1枚表向きで";
print "<br>";
print "残りの4枚は裏向きでカードが配られます";
print "<br>";
print "４枚の裏のカードから表のカードよりも強いと思うカードを選びます";
print "<br>";
print "【成功】：賭け金が倍になります";
print "<br>";
print "→再びダブルアップチャンスに挑戦できます";
print "<br>";
print "【失敗】：賭け金がなくなります";
print "<br>";
print "→終了し、ポーカーに戻ります";


print "<div class=\"container\">";
      print("<form action=\"http://133.54.224.240/penshu4_2020/67170575/poker/play.php\" method=\"post\">");
      print("<input type=\"hidden\" name=\"user\" value=\"".$_POST['uname']."\">");
      print("<input type=\"hidden\" name=\"coin\" value=\"".$number_of_coins."\">");
      print("<input type=\"submit\" value=\"ゲームへ参加する\" class =\"btn-box\">");
      
      print("</form>");

      print "</div>";
          }
     
?>
     

      </body>

      </html>
