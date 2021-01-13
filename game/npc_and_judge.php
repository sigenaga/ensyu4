<?php
//npcの処理

@$con = pg_connect("host=kite.cs.miyazaki-u.ac.jp dbname=endb2020 user=enuser2020 password=enpass2020");

if($_POST['npc2'] == 0)//fold
    {
        print("相手は勝負を降りました");
        print("YOU WIN");
        $win= $_POST['kakekin'] * 2; 
        $sql1= "update passdb set coin ='".$win."'where uname='".$_POST['uname']."'";
        pg_query($sql1);
        print("<form action=\"main.php\" method=\"post\">");
        print("<input type=\"hidden\" name=\"uname\" value=\"".$_POST['uname']."\">");
        print("<input type=\"submit\" value=\"メインへ戻る\">");
        print("</form>");

        exit;
       
    }
elseif(0 < $_POST['npc2'] and $_POST['npc2'] < 3 )//bet
    {
        print("相手がべットしました。　掛け金を+1します<br>");
        $_POST['kakekin']=$_POST['kakekin']+1;
        print("掛け金".$_POST['kakekin']);
    }
elseif(2<$_POST['npc2'] and $_POST['npc2'] < 6)//coll
    {
        print("相手はコールしました<br>");
        
        if($_POST['choice'] == 3 )//npcもplyaerもコールしたので勝負開始(judge)
            {
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
                print($_POST['npc0']."　");
                print($_POST['npc1']);
                print("<br>");

                
                include('judge.php');

                
                //勝負した結果を表示
                
                if($Yourscore > $npcscore)
                    {
                        print("あなたの勝ちです");
                        $win= $_POST['kakekin'] * 2;
                        $sql1= "update passdb set coin ='".$win."'where uname='".$_POST['uname']."'";
                        pg_query($sql1);
                        
                        print("<form action=\"main.php\" method=\"post\">");
                        print("<input type=\"hidden\" name=\"uname\" value=\"".$_POST['uname']."\">");
                        print("<input type=\"submit\" value=\"メインへ戻る\">");
                        print("</form>");
                        exit;
                    }
                elseif($Yourscore == $npcscore)
                    {
                        print("引き分け");
                        print("<form action=\"main.php\" method=\"post\">");
                        print("<input type=\"hidden\" name=\"uname\" value=\"".$_POST['uname']."\">");
                        print("<input type=\"submit\" value=\"メインへ戻る\">");
                        print("</form>");
                        exit;
                    }
                elseif($Yourscore < $npcscore)
                    {
                        print("あなたの負けです");
                        $lose=  $_POST['coin'] - $_POST['kakekin'];
                        $sql1= "update passdb set coin ='".$lose."'where uname='".$_POST['uname']."'"; 
                        pg_query($sql1);
                        print("<form action=\"main.php\" method=\"post\">");
                        print("<input type=\"hidden\" name=\"uname\" value=\"".$_POST['uname']."\">");
                        print("<input type=\"submit\" value=\"メインへ戻る\">");
                        print("</form>");
                        exit;
                    }
                
                
                
                
               
            }
    }

pg_close($con);
 

?>