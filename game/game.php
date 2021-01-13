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
$_POST['npc2'] = mt_rand(0,5);//npcがなにをするか決める


print("　　　　　　　　　　　　コインの枚数".$_POST['coin']."|掛け金".$_POST['kakekin']."<br>");

print("場に出ているカード<br>");
if($_POST['turn'] == 1)
    {
        print($_POST['table0'].",");
    }
elseif($_POST['turn'] == 2)
    {
        print($_POST['table0'].",");
        print($_POST['table1']);   
    }
elseif($_POST['turn'] == 3)
    {
        print($_POST['table0'].",");
        print($_POST['table1'].",");
        print($_POST['table2']);
    }

elseif($_POST['turn'] == 4)
    {
        print($_POST['table0'].",");
        print($_POST['table1'].",");
        print($_POST['table2'].",");
        print($_POST['table3']);
    }
elseif($_POST['turn'] == 5)
    {
        print($_POST['table0'].",");
        print($_POST['table1'].",");
        print($_POST['table2'].",");
        print($_POST['table3'].",");
        print($_POST['table4'].",");
    }


print("<br><br>");

print("あなたの手札");
print("<br>");
print($_POST['player0']."　");
print($_POST['player1']);
print("<br>");

print("NPCの手札");
print("<br>");
print("?　?");

  print("<form action=\"choice.php\" method=\"post\">");
  print("<input type=\"hidden\" name=\"turn\" value=\"".$_POST['turn']."\">");
   print("<input type=\"hidden\" name=\"uname\" value=\"".$_POST['uname']."\">");
  print("<input type=\"hidden\" name=\"coin\" value=\"".$_POST['coin']."\">");
 print("<input type=\"hidden\" name=\"turn\" value=\"".$_POST['turn']."\">");
  print("<input type=\"hidden\" name=\"kakekin\" value=\"".$_POST['kakekin']."\">");
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

?>
<br>
    <input type="radio" name="choice" value="1">フォールド（勝負から降りる）
    <input type="radio" name="choice" value="2">べット（現在の２倍かける）
    <input type="radio" name="choice" value="3">コール（今の手札で勝負）
    
    <input type="submit">
 </from>

    </body>

    </html>