<?php
$h0=10000;
$s0=10000;
$d0=10000;
$c0=10000;
$h1=10000;
$s1=10000;
$d1=10000;
$c1=10000;

$p0[0] = 10000;
$p0[1] = 10000;
$p0[2] = 10000;
$p0[3] = 10000;
$p1[0] = 10000;
$p1[1] = 10000;
$p1[2] = 10000;
$p1[3] = 10000;

$No0 = 10000;
$No1 = 10000;

$t0[0] = 10000;
$t0[1] = 10000;
$t0[2] = 10000;
$t0[3] = 10000;
$t1[0] = 10000;
$t1[1] = 10000;
$t1[2] = 10000;
$t1[3] = 10000;
$t2[0] = 10000;
$t2[1] = 10000;
$t2[2] = 10000;
$t2[3] = 10000;
$t3[0] = 10000;
$t3[1] = 10000;
$t3[2] = 10000;
$t3[3] = 10000;
$t4[0] = 10000;
$t4[1] = 10000;
$t4[2] = 10000;
$t4[3] = 10000;


$T[0] = 10000;
$T[1] = 10000;
$T[2] = 10000;
$T[3] = 10000;


$npc_h0=10000;
$npc_s0=10000;
$npc_d0=10000;
$npc_c0=10000;
$npc_h1=10000;
$npc_s1=10000;
$npc_d1=10000;
$npc_c1=10000;

$table_h0=10000;
$table_s0=10000;
$table_d0=10000;
$table_c0=10000;
$table_h1=10000;
$table_s1=10000;
$table_d1=10000;
$table_c1=10000;
$table_h2=10000;
$table_s2=10000;
$table_d2=10000;
$table_c2=10000;
$table_h3=10000;
$table_s3=10000;
$table_d3=10000;
$table_c3=10000;
$table_h4=10000;
$table_s4=10000;
$table_d4=10000;
$table_c4=10000;


//まずplayer0のカードの種類を調べる
include('code.php');
for($n = 1;$n <= 13;$n++)
    {
        if($heart[$n] == $_POST['player0'])
       {
           $h0=$n;
           $p0[0] = $h0;
           $No0 = $p0[0];
           break;
       }
       elseif($spade[$n] == $_POST['player0'])
           {
               $s0=$n;
               $p0[1] = $s0;
               $No0 = $p0[1];
               break;
           }
       elseif($dyer[$n] == $_POST['player0'])
           {
               $d0=$n;
               $p0[2] = $d0;
               $No0 = $p0[2];
               break;
           }
       elseif($clover[$n] == $_POST['player0'])
           {
               $c0=$n;
               $p0[3] = $c0;
               $No0=$p0[3];
               break;
           }
           
    }

//次にplayer1のカードを調べる
for($n = 1;$n <= 13;$n++)
    {
        if($heart[$n] == $_POST['player1'])
       {
           $h1=$n;
           $p1[0] = $h1;
           $No1 = $p1[0];
           break;
       }
       elseif($spade[$n] == $_POST['player1'])
           {
               $s1=$n;
               $p1[1] = $s1;
               $No1 = $p1[1];
               break;
           }
       elseif($dyer[$n] == $_POST['player1'])
           {
               $d1=$n;
               $p1[2] = $d1;
               $No1=$p1[2];
               break;
           }
       elseif($clover[$n] == $_POST['player1'])
           {
               $c1=$n;
               $p1[3] = $c1;
               $No1 = $p1[3];
               break;
           }
    }

//npc0のカードを調べる
for($n = 1;$n <= 13;$n++)
    {
        if($heart[$n] == $_POST['npc0'])
       {
           $npc_h0=$n;
           $np0[0] = $npc_h0;
           $Np0 = $np0[0];
           break;
       }
       if($spade[$n] == $_POST['npc0'])
           {
               $npc_s0=$n;
               $np0[1] = $npc_s0;
               $Np0 = $np0[1];
               break;
           }
       if($dyer[$n] == $_POST['npc0'])
           {
               $npc_d0=$n;
               $np0[2] = $npc_d0;
                $Np0 = $np0[2];
               break;
           }
       if($clover[$n] == $_POST['npc0'])
           {
               $npc_c0=$n;
               $np0[3] = $npc_c0;
                $Np0 = $np0[3];
               break;
           }
           
    }
//npc1のカードを調べる
for($n = 1;$n <= 13;$n++)
    {
        if($heart[$n] == $_POST['npc1'])
       {
           $npc_h1=$n;
           $np1[0] = $npc_h1;
            $Np1 = $np1[0];
           break;
       }
       if($spade[$n] == $_POST['npc1'])
           {
               $npc_s1=$n;
               $np1[1] = $npc_s1;
                $Np1 = $np1[1];
               break;
           }
       if($dyer[$n] == $_POST['npc1'])
           {
               $npc_d1=$n;
               $np1[2] = $npc_d1;
                $Np1 = $np1[2];
               break;
           }
       if($clover[$n] == $_POST['npc1'])
           {
               $npc_c1=$n;
               $np1[3] = $npc_c1;
                $Np1 = $np1[3];
               break;
           }
           
    }
//table0のカードを調べる
for($n = 1;$n <= 13;$n++)
    {
        if($heart[$n] == $_POST['table0'])
       {
           $table_h0=$n;
           $t0[0] = $table_h0;
           $T[0] = $t0[0];
           break;
       }
       if($spade[$n] == $_POST['table0'])
           {
               $table_s0=$n;
               $t0[1] = $table_s0;
                $T[0] = $t0[1];
               break;
           }
       if($dyer[$n] == $_POST['table0'])
           {
               $table_d0=$n;
               $t0[2] = $table_d0;
                $T[0] = $t0[2];
               break;
           }
       if($clover[$n] == $_POST['table0'])
           {
               $table_c0=$n;
               $t0[3] = $table_c0;
                $T[0] = $t0[3];
               break;
           }
           
    }

//table1のカードを調べる
for($n = 1;$n <= 13;$n++)
    {
        if($heart[$n] == $_POST['table1'])
       {
           $table_h1=$n;
           $t1[0] = $table_h1;
            $T[1] = $t1[0];
           break;
       }
       if($spade[$n] == $_POST['table1'])
           {
               $table_s1=$n;
               $t1[1] = $table_s1;
                $T[1] = $t1[1];
               break;
           }
       if($dyer[$n] == $_POST['table1'])
           {
               $table_d1=$n;
               $t1[2] = $table_d1;
                $T[1] = $t1[2];
               break;
           }
       if($clover[$n] == $_POST['table1'])
           {
               $table_c1=$n;
               $t1[3] = $table_c1;
                $T[1] = $t1[3];
               break;
           }
           
    }

//table2のカードを調べる
for($n = 1;$n <= 13;$n++)
    {
        if($heart[$n] == $_POST['table2'])
       {
           $table_h2=$n;
           $t2[0] = $table_h2;
            $T[2] = $t2[0];
           break;
       }
       if($spade[$n] == $_POST['table2'])
           {
               $table_s2=$n;
               $t2[1] = $table_s2;
               $T2 = $t2[1];
               break;
           }
       if($dyer[$n] == $_POST['table2'])
           {
               $table_d2=$n;
               $t2[2] = $table_d2;
               $T[2] = $t2[2];
               break;
           }
       if($clover[$n] == $_POST['table2'])
           {
               $table_c2=$n;
               $t2[3] = $table_c2;
                 $T[2] = $t2[3];
               break;
           }
    }
//table3のカードを調べる
for($n = 1;$n <= 13;$n++)
    {
        if($heart[$n] == $_POST['table3'])
       {
           $table_h3=$n;
           $t3[0] = $table_h3;
             $T[3] = $t3[0];
           break;
       }
       if($spade[$n] == $_POST['table3'])
           {
               $table_s3=$n;
               $t3[1] = $table_s3;
               $T[3] = $t3[1];
               break;
           }
       if($dyer[$n] == $_POST['table3'])
           {
               $table_d3=$n;
               $t3[2] = $table_d3;
               $T[3] = $t3[1];
               break;
           }
       if($clover[$n] == $_POST['table3'])
           {
               $table_c3=$n;
               $t3[3] = $table_c3;
               $T[3] = $t3[0];
               break;
           }
           
    }
//table4のカードを調べる
for($n = 1;$n <= 13;$n++)
    {
        if($heart[$n] == $_POST['table4'])
       {
           $table_h4=$n;
           $t4[0] = $table_h4;
           $T[4] = $t4[0];
           break;
       }
       if($spade[$n] == $_POST['table4'])
           {
               $table_s4=$n;
               $t4[1] = $table_s4;
               $T[4] = $t4[1];
               break;
           }
       if($dyer[$n] == $_POST['table4'])
           {
               $table_d4=$n;
               $t4[2] = $table_d4;
               $T[4] = $t4[2];
               break;
           }
       if($clover[$n] == $_POST['table4'])
           {
               $table_c4=$n;
               $t4[3] = $table_c4;
               $T[4] = $t4[3];
               break;
           }
           
    }


$yourscore = 0;
if($_POST['turn'] == 0)
    {
        include('no,0.php');
        $Yourscore = $yourscore;
        
        $yourscore = 0;
        $No0 = $Np0; 
        $No1 = $Np1;
         include('no,0.php');
         $npcscore = $yourscore;
        
    }
elseif($_POST['turn'] == 1)
    {
        include('no,1.php');
         $Yourscore = $yourscore;
          $yourscore = 0;
        $No0 = $Np0; 
        $No1 = $Np1;
         include('no,1.php');
         $npcscore = $yourscore;
    }
elseif($_POST['turn'] == 2)
    {
        include('no,2.php');
         $Yourscore = $yourscore;
          $yourscore = 0;
        $No0 = $Np0; 
        $No1 = $Np1;
         include('no,2.php');
         $npcscore = $yourscore;
    }
elseif($_POST['turn'] == 3)
    {
        include('no,3.php');
         $Yourscore = $yourscore;
          $yourscore = 0;
        $No0 = $Np0; 
        $No1 = $Np1;
         include('no,3.php');
         $npcscore = $yourscore;
    }
elseif($_POST['turn'] == 4)
    {
        include('no,4.php');
         $Yourscore = $yourscore;
          $yourscore = 0;
        $No0 = $Np0; 
        $No1 = $Np1;
         include('no,4.php');
         $npcscore = $yourscore;
    }
elseif($_POST['turn'] == 5)
    {
        include('no,5.php');
         $Yourscore = $yourscore;
        $yourscore = 0;
        $No0 = $Np0; 
        $No1 = $Np1;
        $h0 = $npc_h1;
        $s0 = $npc_s1;
        $d0 = $npc_d1;
        $c0 = $npc_c1;
        $h1 = $npc_h1;
        $s1 = $npc_s1;
        $d1 = $npc_d1;
        $c1 = $npc_c1;

        print("<br>");
        include('no,5.php');
        $npcscore = $yourscore;
    }




?>