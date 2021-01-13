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
       include('code.php');//トランプカードそのものを取得

for($i = 0; $i < 2;$i++)
    {
        $type = mt_rand( 0, 3);
        $number = mt_rand( 1, 13);

        if($type == 0)
            {
                $player[$i]= $heart[$number];
            }
        elseif($type == 1)
            {
                $player[$i] = $spade[$number];
            }
        elseif($type == 2)
            {
                $player[$i] = $dyer[$number];
            }
        elseif($type == 3)
            {
                $player[$i] = $clover[$number];
            }
    }
for($i = 0; $i < 2;$i++)
    {
        $type = mt_rand( 0, 3);
        $number = mt_rand( 1, 13);

        if($type == 0)
            {
                $npc[$i] = $heart[$number];
            }
        elseif($type == 1)
            {
                $npc[$i] = $spade[$number];
             }
        elseif($type == 2)
            {
                $npc[$i] = $dyer[$number];
            }
        elseif($type == 3)
            {
                $npc[$i] = $clover[$number];
            }
    }

$npc[2] = mt_rand(0,5);//npcがなにをするか決める
 

for($i = 0; $i < 5;$i++)
    {
        $type = mt_rand( 0, 3);
        $number = mt_rand( 1, 13);

        if($type == 0)
            {
                $table[$i] =$heart[$number]; 
            }
        elseif($type == 1)
            {
                $table[$i] =$spade[$number]; 
            }
        elseif($type == 2)
            {
                $table[$i] =$dyer[$number]; 
            }
        elseif($type == 3)
            {
                $table[$i] =$clover[$number];
            }
    }

$kakekin=1;//最初の掛け金
$turn = 0;//ターン
print("以下、ルール説明をする。");


  print("<form action=\"game.php\" method=\"post\">");
  print("<input type=\"hidden\" name=\"uname\" value=\"".$_POST['uname']."\">");
  print("<input type=\"hidden\" name=\"coin\" value=\"".$_POST['coin']."\">");
 print("<input type=\"hidden\" name=\"turn\" value=\"".$turn."\">");
  print("<input type=\"hidden\" name=\"kakekin\" value=\"".$kakekin."\">");
 print("<input type=\"hidden\" name=\"table0\" value=\"".$table[0]."\">");
 print("<input type=\"hidden\" name=\"table1\" value=\"".$table[1]."\">");
 print("<input type=\"hidden\" name=\"table2\" value=\"".$table[2]."\">");
 print("<input type=\"hidden\" name=\"table3\" value=\"".$table[3]."\">");
print("<input type=\"hidden\" name=\"table4\" value=\"".$table[4]."\">");
 print("<input type=\"hidden\" name=\"player0\" value=\"".$player[0]."\">");
 print("<input type=\"hidden\" name=\"player1\" value=\"".$player[1]."\">");
 print("<input type=\"hidden\" name=\"npc0\" value=\"".$npc[0]."\">");
 print("<input type=\"hidden\" name=\"npc1\" value=\"".$npc[1]."\">");
 print("<input type=\"hidden\" name=\"npc2\" value=\"".$npc[2]."\">");

?>
    
    <input type="submit" value="始める">
</from>

  </body>

    </html>