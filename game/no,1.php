<?php


for($i =1; $i < 14; $i++)
    {
        if($No0 == $i and $No1 == $i and $T[0] == $i)
            {
                print("スリーオブカインド");
                $yourscore += 40;
                break;
                
            }
        elseif(($No0 == $i and $No1 == $i)
             or($No0 == $i and $T[0] == $i)
             or($No1 == $i and $T[0] == $i))
            {
                print("ワンペア");
                $yourscore += 20;
                break;
            }
    }



?>