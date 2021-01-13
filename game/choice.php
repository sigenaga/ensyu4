<!DOCTYPE html>

<html lang="ja">

      <head>
      <link rel="stylesheet" type="text/css" href="/~tyf7207/css/yamaba01.css">
      <title>
      game
      </title>
      <meta charset="utf-8">
      </head>

      <body>
      <h1>game</h1>


<?php
      //プレイヤーが選んだものに対する処理
      include('code.php');
    
@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2020 user=enuser2020 password=enpass2020");
if ($con == false)
    {
        print("DATABASE CONNECTION ERROR\n");
        exit;
    }
        
if($_POST['choice'] == 1)//fold
    {
        print("あなたは勝負を降りました。");
        $coin = $_POST['coin'] - $_POST['kakekin'];
        $sql1= "update passdb set coin ='".$coin."'where uname='".$_POST['uname']."'";
        pg_query($sql1);
        print("<form action=\"main.php\" method=\"post\">");
        print("<input type=\"hidden\" name=\"uname\" value=\"".$_POST['uname']."\">");
        print("<input type=\"submit\" value=\"メインへ戻る\">");
        print("</form>");


        exit;
    }
elseif($_POST['choice'] == 2)//bet
    {
               
        print("あなたは掛け金を+1しました");
        $_POST['kakekin']=$_POST['kakekin']+1;
        print("掛け金".$_POST['kakekin']);
                
                
    }

elseif($_POST['choice']==3)//coll
    {
        print("あなたはコールしました");
    }

include('npc_and_judge.php');//npcの処理と勝負の結果を処理する
$_POST['turn'] = $_POST['turn'] + 1;


print("<form action=\"game.php\" method=\"post\">");
print("<input type=\"hidden\" name=\"turn\" value=\"".$_POST['turn']."\">");
print("<input type=\"hidden\" name=\"kakekin\" value=\"".$_POST['kakekin']."\">");
print("<input type=\"hidden\" name=\"turn\" value=\"".$_POST['turn']."\">");
print("<input type=\"hidden\" name=\"uname\" value=\"".$_POST['uname']."\">");
print("<input type=\"hidden\" name=\"coin\" value=\"".$_POST['coin']."\">");
print("<input type=\"hidden\" name=\"table0\" value=\"".$_POST['table0']."\">");
print("<input type=\"hidden\" name=\"table1\" value=\"".$_POST['table1']."\">");
print("<input type=\"hidden\" name=\"table2\" value=\"".$_POST['table2']."\">");
print("<input type=\"hidden\" name=\"table3\" value=\"".$_POST['table3']."\">");
print("<input type=\"hidden\" name=\"table4\" value=\"".$_POST['table4']."\">");
print("<input type=\"hidden\" name=\"player0\" value=\"".$_POST['player0']."\">");
print("<input type=\"hidden\" name=\"player1\" value=\"".$_POST['player1']."\">");
print("<input type=\"hidden\" name=\"npc0\" value=\"".$_POST['npc0']."\">");
print("<input type=\"hidden\" name=\"npc1\" value=\"".$_POST['npc1']."\">");
print("<input type=\"hidden\" name=\"npc2\" value=\"".$_POST['npc2']."\">");

print("<input type=\"submit\">");

    

?> 
</from>
</body>

</html>