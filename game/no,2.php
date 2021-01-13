<?php
$B=0;
//フォーオブアカインド
for($q = 1; $q <14; $q++)
    {
        if($No0 == $q and $No1 == $q and $T[0] == $q and $T[1] == $q)
            {
                print("フォーオブアカインド");
                $yourscore += 80;
                $B=1;
                break;
            }
        
        //スリーオブカインド
        elseif(($No0 == $q and $No1 == $q and $T[0] == $q)
             or($No0 == $q and $No1 == $q and $T[1] == $q)
             or($No0 == $q and $T[0] == $q and $T[1] == $q)
             or($No1 == $q and $T[0] == $q and $T[1] == $q)
        )
            {
                print("スリーオブカインド");
                 $yourscore += 40;
                 $B=1;
                break;
                
            }
    }

if($B == 0)
{    
//ツーペア
for($i = 1; $i < 14; $i++)
    {
        for($q = 1; $q < 14; $q++)
            {
                if(($No0 == $i and $No1 == $i and $T[0] == $q and $T[1] == $q)
                 or($No0 == $i and $T[0] == $i and $No1 == $q and $T[1] == $q)
                 or($No0 == $i and $T[1] == $i and $No1 == $q and $T[0] == $q)
                 or($No1 == $i and $T[0] == $i and $No0 == $q and $T[1] == $q)
                 or($No1 == $i and $T[1] == $i and $No0 == $q and $T[0] == $q)
                )
                    {
                        print("ツーペア");
                        $yourscore += 30;
                        break;   
                        
                    }
               
            }
        elseif(($No0 == $i and $No1 == $i)
             or($No0 == $i and $T[0] == $i)
             or($No0 == $i and $T[1] == $i)
             or($No1 == $i and $T[0] == $i)
             or($No1 == $i and $T[1] == $i)
        )
            {
                print("ワンペア");
                $yourscore += 20;
                break;   
                
            }
    }
    
}

?>