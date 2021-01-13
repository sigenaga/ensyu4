<?php
$B=0;
//ロイヤル・フラッシュ
for($i = 0; $i < 4; $i++)
    {
        for($q = 0; $q < 10; $q++)
            {
                if(($p0[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p0[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p0[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $p1[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $p1[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)
                
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)

                 or($p0[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($p0[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)

                //p1
                 or($p1[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p1[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p1[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $p0[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $p0[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)
                
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)

                 or($p1[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)
                 or($p1[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)

                //t0[]
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)
                
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)

                 or($t0[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)

                //t1[]
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and pt1[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)
                
                 or($t1[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t1[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)

                 or($t1[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)

                //t2[]
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)
                
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)

                 or($t2[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4
                
                )
                    {
                        if($q <= 8)
                            {
                                print("ストレート・フラッシュ");
                                  $yourscore += 90;
                                  $B=1;
                                  break;
                            }
                        elseif($q > 8)
                            {
                        print("ロイヤル・フラッシュ");
                        $yourscore += 100;
                        $B=1;
                        break;
                            }
                    }

                
            }
     }


//フォーオブアカインド
        for($q =1; $q < 14; $q++)
            {
                if(($No0 == $q and $No1 == $q and $T[0] == $q and $T[1] == $q)
                 or($No0 == $q and $No1 == $q and $T[0] == $q and $T[2] == $q)
                 or($No0 == $q and $No1 == $q and $T[1] == $q and $T[2] == $q)
                 or($No0 == $q and $T[0] == $q and $T[1] == $q and $T[2] == $q)
                 or($No1 == $q and $T[0] == $q and $T[1] == $q and $T[2] == $q)
                )
                    {
                        print("フォーオブアカインド");
                           $yourscore += 80;
                           break;
                        
                    }
            }

//フルハウス
        for($i = 1; $i < 14; $i++)
            {
                for($q =1; $q < 14; $q++)
                    {
                        if(($No0 == $i and $No1 == $i and $T[0] == $i and $T[1] == $q and $T[2] == $q)
                         or($No0 == $i and $No1 == $i and $T[1] == $i and $T[0] == $q and $T[2] == $q)
                         or($No0 == $i and $No1 == $i and $T[2] == $i and $T[0] == $q and $T[1] == $q)
                         or($No0 == $i and $T[0] == $i and $T[1] == $i and $No1 == $q and $T[2] == $q)
                         or($No0 == $i and $T[0] == $i and $T[2] == $i and $No1 == $q and $T[1] == $q)
                         or($No0 == $i and $T[1] == $i and $T[2] == $i and $No1 == $q and $T[0] == $q)
                         or($No1 == $i and $T[0] == $i and $T[1] == $i and $No0 == $q and $T[2] == $q)
                         or($No1 == $i and $T[0] == $i and $T[2] == $i and $No0 == $q and $T[1] == $q)
                         or($No1 == $i and $T[1] == $i and $T[2] == $i and $No0 == $q and $T[0] == $q)
                         or($T[0] == $i and $T[1] == $i and $T[2] == $i and $No1 == $q and $No0 == $q)
                        )
                            {
                                print("フルハウス");
                                 $yourscore += 70;
                                 break;
                                
                            }
                    }
            }


if($B == 0)
    {
//フラッシュ
        for($i = 0; $i < 4; $i++)
            {
                if($p0[$i] < 14 and $p1[$i] < 14 and $t0[$i] < 14 and $t1[$i] < 14 and $t2[$i] < 14)
                    {
                        print("フラッシュ");
                         $yourscore += 60;
                         break;
                                
                    }
            }

//ストレート
        for($i = 1; $i < 10; $i++)
            {
                if(($No0 == $i and $No1 == $i+1 and $T[0] == $i+2 and $T[1] == $i+3 and $T[2] == $i+4)
                 or($No0 == $i and $No1 == $i+1 and $T[0] == $i+2 and $T[2] == $i+3 and $T[1] == $i+4)
                 or($No0 == $i and $No1 == $i+1 and $T[1] == $i+2 and $T[0] == $i+3 and $T[2] == $i+4)
                 or($No0 == $i and $No1 == $i+1 and $T[1] == $i+2 and $T[2] == $i+3 and $T[0] == $i+4)
                 or($No0 == $i and $No1 == $i+1 and $T[2] == $i+2 and $T[0] == $i+3 and $T[1] == $i+4)
                 or($No0 == $i and $No1 == $i+1 and $T[2] == $i+2 and $T[1] == $i+3 and $T[0] == $i+4)
                 or($No0 == $i and $T[0] == $i+1 and $No1 == $i+2 and $T[1] == $i+3 and $T[2] == $i+4)
                 or($No0 == $i and $T[0] == $i+1 and $No1 == $i+2 and $T[2] == $i+3 and $T[1] == $i+4)
                 or($No0 == $i and $T[1] == $i+1 and $No1 == $i+2 and $T[0] == $i+3 and $T[2] == $i+4)
                 or($No0 == $i and $T[1] == $i+1 and $No1 == $i+2 and $T[2] == $i+3 and $T[0] == $i+4)
                 or($No0 == $i and $T[2] == $i+1 and $No1 == $i+2 and $T[0] == $i+3 and $T[1] == $i+4)
                 or($No0 == $i and $T[2] == $i+1 and $No1 == $i+2 and $T[1] == $i+3 and $T[0] == $i+4)
                 or($No0 == $i and $T[0] == $i+1 and $T[1] == $i+2 and $No1 == $i+3 and $T[2] == $i+4)
                 or($No0 == $i and $T[0] == $i+1 and $T[2] == $i+2 and $No1 == $i+3 and $T[1] == $i+4)
                 or($No0 == $i and $T[1] == $i+1 and $T[0] == $i+2 and $No1 == $i+3 and $T[2] == $i+4)
                 or($No0 == $i and $T[1] == $i+1 and $T[2] == $i+2 and $No1 == $i+3 and $T[0] == $i+4)
                 or($No0 == $i and $T[2] == $i+1 and $T[0] == $i+2 and $No1 == $i+3 and $T[1] == $i+4)
                 or($No0 == $i and $T[2] == $i+1 and $T[1] == $i+2 and $No1 == $i+3 and $T[0] == $i+4)
                 or($No0 == $i and $T[0] == $i+1 and $T[1] == $i+2 and $T[2] == $i+3 and $No1 == $i+4)
                 or($No0 == $i and $T[0] == $i+1 and $T[2] == $i+2 and $T[1] == $i+3 and $No1 == $i+4)
                 or($No0 == $i and $T[1] == $i+1 and $T[0] == $i+2 and $T[2] == $i+3 and $No1 == $i+4)
                 or($No0 == $i and $T[1] == $i+1 and $T[2] == $i+2 and $T[0] == $i+3 and $No1 == $i+4)
                 or($No0 == $i and $T[2] == $i+1 and $T[0] == $i+2 and $T[1] == $i+3 and $No1 == $i+4)
                 or($No0 == $i and $T[2] == $i+1 and $T[1] == $i+2 and $T[0] == $i+3 and $No1 == $i+4)

                

                 or($No1 == $i and $No0 == $i+1 and $T[0] == $i+2 and $T[1] == $i+3 and $T[2] == $i+4)
                 or($No1 == $i and $No0 == $i+1 and $T[0] == $i+2 and $T[2] == $i+3 and $T[1] == $i+4)
                 or($No1 == $i and $No0 == $i+1 and $T[1] == $i+2 and $T[0] == $i+3 and $T[2] == $i+4)
                 or($No1 == $i and $No0 == $i+1 and $T[1] == $i+2 and $T[2] == $i+3 and $T[0] == $i+4)
                 or($No1 == $i and $No0 == $i+1 and $T[2] == $i+2 and $T[0] == $i+3 and $T[1] == $i+4)
                 or($No1 == $i and $No0 == $i+1 and $T[2] == $i+2 and $T[1] == $i+3 and $T[0] == $i+4)
                 or($No1 == $i and $T[0] == $i+1 and $No0 == $i+2 and $T[1] == $i+3 and $T[2] == $i+4)
                 or($No1 == $i and $T[0] == $i+1 and $No0 == $i+2 and $T[1] == $i+3 and $T[2] == $i+4)
                 or($No1 == $i and $T[0] == $i+1 and $No0 == $i+2 and $T[2] == $i+3 and $T[1] == $i+4)
                 or($No1 == $i and $T[1] == $i+1 and $No0 == $i+2 and $T[0] == $i+3 and $T[2] == $i+4)
                 or($No1 == $i and $T[1] == $i+1 and $No0 == $i+2 and $T[2] == $i+3 and $T[0] == $i+4)
                 or($No1 == $i and $T[2] == $i+1 and $No0 == $i+2 and $T[0] == $i+3 and $T[1] == $i+4)
                 or($No1 == $i and $T[2] == $i+1 and $No0 == $i+2 and $T[1] == $i+3 and $T[0] == $i+4)
                 or($No1 == $i and $T[0] == $i+1 and $T[1] == $i+2 and $No0 == $i+3 and $T[2] == $i+4)
                 or($No1 == $i and $T[0] == $i+1 and $T[2] == $i+2 and $No0 == $i+3 and $T[1] == $i+4)
                 or($No1 == $i and $T[1] == $i+1 and $T[0] == $i+2 and $No0 == $i+3 and $T[2] == $i+4)
                 or($No1 == $i and $T[1] == $i+1 and $T[2] == $i+2 and $No0 == $i+3 and $T[0] == $i+4)
                 or($No1 == $i and $T[2] == $i+1 and $T[0] == $i+2 and $No0 == $i+3 and $T[1] == $i+4)
                 or($No1 == $i and $T[2] == $i+1 and $T[1] == $i+2 and $No0 == $i+3 and $T[0] == $i+4)
                 or($No1 == $i and $T[0] == $i+1 and $T[1] == $i+2 and $T[2] == $i+3 and $No0 == $i+4)
                 or($No1 == $i and $T[0] == $i+1 and $T[2] == $i+2 and $T[1] == $i+3 and $No0 == $i+4)
                 or($No1 == $i and $T[1] == $i+1 and $T[0] == $i+2 and $T[2] == $i+3 and $No0 == $i+4)
                 or($No1 == $i and $T[1] == $i+1 and $T[2] == $i+2 and $T[0] == $i+3 and $No0 == $i+4)
                 or($No1 == $i and $T[2] == $i+1 and $T[0] == $i+2 and $T[1] == $i+3 and $No0 == $i+4)
                 or($No1 == $i and $T[2] == $i+1 and $T[1] == $i+2 and $T[0] == $i+3 and $No0 == $i+4)

                 or($T[0] == $i and $No0 == $i+1 and $No1 == $i+2 and $T[1] == $i+3 and $T[2] == $i+4)
                 or($T[0] == $i and $No0 == $i+1 and $No1 == $i+2 and $T[2] == $i+3 and $T[1] == $i+4)
                 or($T[0] == $i and $No0 == $i+1 and $T[1] == $i+2 and $No1 == $i+3 and $T[2] == $i+4)
                 or($T[0] == $i and $No0 == $i+1 and $T[1] == $i+2 and $T[2] == $i+3 and $No1 == $i+4)
                 or($T[0] == $i and $No0 == $i+1 and $T[2] == $i+2 and $No1 == $i+3 and $T[1] == $i+4)
                 or($T[0] == $i and $No0 == $i+1 and $T[2] == $i+2 and $T[1] == $i+3 and $No1 == $i+4)
                 or($T[0] == $i and $No1 == $i+1 and $No0 == $i+2 and $T[1] == $i+3 and $T[2] == $i+4)
                 or($T[0] == $i and $No1 == $i+1 and $No0 == $i+2 and $T[1] == $i+3 and $T[2] == $i+4)
                 or($T[0] == $i and $No1 == $i+1 and $No0 == $i+2 and $T[2] == $i+3 and $T[1] == $i+4)
                 or($T[0] == $i and $T[1] == $i+1 and $No0 == $i+2 and $No1 == $i+3 and $T[2] == $i+4)
                 or($T[0] == $i and $T[1] == $i+1 and $No0 == $i+2 and $T[2] == $i+3 and $No1 == $i+4)
                 or($T[0] == $i and $T[2] == $i+1 and $No0 == $i+2 and $No1 == $i+3 and $T[1] == $i+4)
                 or($T[0] == $i and $T[2] == $i+1 and $No0 == $i+2 and $T[1] == $i+3 and $No1 == $i+4)
                 or($T[0] == $i and $No1 == $i+1 and $T[1] == $i+2 and $No0 == $i+3 and $T[2] == $i+4)
                 or($T[0] == $i and $No1 == $i+1 and $T[2] == $i+2 and $No0 == $i+3 and $T[1] == $i+4)
                 or($T[0] == $i and $T[1] == $i+1 and $No1 == $i+2 and $No0 == $i+3 and $T[2] == $i+4)
                 or($T[0] == $i and $T[1] == $i+1 and $T[2] == $i+2 and $No0 == $i+3 and $No1 == $i+4)
                 or($T[0] == $i and $T[2] == $i+1 and $No1 == $i+2 and $No0 == $i+3 and $T[1] == $i+4)
                 or($T[0] == $i and $T[2] == $i+1 and $T[1] == $i+2 and $No0 == $i+3 and $No1 == $i+4)
                 or($T[0] == $i and $No1 == $i+1 and $T[1] == $i+2 and $T[2] == $i+3 and $No0 == $i+4)
                 or($T[0] == $i and $No1 == $i+1 and $T[2] == $i+2 and $T[1] == $i+3 and $No0 == $i+4)
                 or($T[0] == $i and $T[1] == $i+1 and $No1 == $i+2 and $T[2] == $i+3 and $No0 == $i+4)
                 or($T[0] == $i and $T[1] == $i+1 and $T[2] == $i+2 and $No1 == $i+3 and $No0 == $i+4)
                 or($T[0] == $i and $T[2] == $i+1 and $No1 == $i+2 and $T[1] == $i+3 and $No0 == $i+4)
                 or($T[0] == $i and $T[2] == $i+1 and $T[1] == $i+2 and $No1 == $i+3 and $No0 == $i+4)

                 or($T[1] == $i and $No0 == $i+1 and $No1 == $i+2 and $T[0] == $i+3 and $T[2] == $i+4)
                 or($T[1] == $i and $No0 == $i+1 and $No1 == $i+2 and $T[2] == $i+3 and $T[0] == $i+4)
                 or($T[1] == $i and $No0 == $i+1 and $T[0] == $i+2 and $No1 == $i+3 and $T[2] == $i+4)
                 or($T[1] == $i and $No0 == $i+1 and $T[0] == $i+2 and $T[2] == $i+3 and $No1 == $i+4)
                 or($T[1] == $i and $No0 == $i+1 and $T[2] == $i+2 and $No1 == $i+3 and $T[0] == $i+4)
                 or($T[1] == $i and $No0 == $i+1 and $T[2] == $i+2 and $T[0] == $i+3 and $No1 == $i+4)
                 or($T[1] == $i and $No1 == $i+1 and $No0 == $i+2 and $T[0] == $i+3 and $T[2] == $i+4)
                 or($T[1] == $i and $No1 == $i+1 and $No0 == $i+2 and $T[0] == $i+3 and $T[2] == $i+4)
                 or($T[1] == $i and $No1 == $i+1 and $No0 == $i+2 and $T[2] == $i+3 and $T[0] == $i+4)
                 or($T[1] == $i and $T[0] == $i+1 and $No0 == $i+2 and $No1 == $i+3 and $T[2] == $i+4)
                 or($T[1] == $i and $T[0] == $i+1 and $No0 == $i+2 and $T[2] == $i+3 and $No1 == $i+4)
                 or($T[1] == $i and $T[2] == $i+1 and $No0 == $i+2 and $No1 == $i+3 and $T[0] == $i+4)
                 or($T[1] == $i and $T[2] == $i+1 and $No0 == $i+2 and $T[0] == $i+3 and $No1 == $i+4)
                 or($T[1] == $i and $No1 == $i+1 and $T[0] == $i+2 and $No0 == $i+3 and $T[2] == $i+4)
                 or($T[1] == $i and $No1 == $i+1 and $T[2] == $i+2 and $No0 == $i+3 and $T[0] == $i+4)
                 or($T[1] == $i and $T[0] == $i+1 and $No1 == $i+2 and $No0 == $i+3 and $T[2] == $i+4)
                 or($T[1] == $i and $T[0] == $i+1 and $T[2] == $i+2 and $No0 == $i+3 and $No1 == $i+4)
                 or($T[1] == $i and $T[2] == $i+1 and $No1 == $i+2 and $No0 == $i+3 and $T[0] == $i+4)
                 or($T[1] == $i and $T[2] == $i+1 and $T[0] == $i+2 and $No0 == $i+3 and $No1 == $i+4)
                 or($T[1] == $i and $No1 == $i+1 and $T[0] == $i+2 and $T[2] == $i+3 and $No0 == $i+4)
                 or($T[1] == $i and $No1 == $i+1 and $T[2] == $i+2 and $T[0] == $i+3 and $No0 == $i+4)
                 or($T[1] == $i and $T[0] == $i+1 and $No1 == $i+2 and $T[2] == $i+3 and $No0 == $i+4)
                 or($T[1] == $i and $T[0] == $i+1 and $T[2] == $i+2 and $No1 == $i+3 and $No0 == $i+4)
                 or($T[1] == $i and $T[2] == $i+1 and $No1 == $i+2 and $T[0] == $i+3 and $No0 == $i+4)
                 or($T[1] == $i and $T[2] == $i+1 and $T[0] == $i+2 and $No1 == $i+3 and $No0 == $i+4)


                 or($T[2] == $i and $No0 == $i+1 and $No1 == $i+2 and $T[1] == $i+3 and $T[0] == $i+4)
                 or($T[2] == $i and $No0 == $i+1 and $No1 == $i+2 and $T[0] == $i+3 and $T[1] == $i+4)
                 or($T[2] == $i and $No0 == $i+1 and $T[1] == $i+2 and $No1 == $i+3 and $T[0] == $i+4)
                 or($T[2] == $i and $No0 == $i+1 and $T[1] == $i+2 and $T[0] == $i+3 and $No1 == $i+4)
                 or($T[2] == $i and $No0 == $i+1 and $T[0] == $i+2 and $No1 == $i+3 and $T[1] == $i+4)
                 or($T[2] == $i and $No0 == $i+1 and $T[0] == $i+2 and $T[1] == $i+3 and $No1 == $i+4)
                 or($T[2] == $i and $No1 == $i+1 and $No0 == $i+2 and $T[1] == $i+3 and $T[0] == $i+4)
                 or($T[2] == $i and $No1 == $i+1 and $No0 == $i+2 and $T[1] == $i+3 and $T[0] == $i+4)
                 or($T[2] == $i and $No1 == $i+1 and $No0 == $i+2 and $T[0] == $i+3 and $T[1] == $i+4)
                 or($T[2] == $i and $T[1] == $i+1 and $No0 == $i+2 and $No1 == $i+3 and $T[0] == $i+4)
                 or($T[2] == $i and $T[1] == $i+1 and $No0 == $i+2 and $T[0] == $i+3 and $No1 == $i+4)
                 or($T[2] == $i and $T[0] == $i+1 and $No0 == $i+2 and $No1 == $i+3 and $T[1] == $i+4)
                 or($T[2] == $i and $T[0] == $i+1 and $No0 == $i+2 and $T[1] == $i+3 and $No1 == $i+4)
                 or($T[2] == $i and $No1 == $i+1 and $T[1] == $i+2 and $No0 == $i+3 and $T[0] == $i+4)
                 or($T[2] == $i and $No1 == $i+1 and $T[0] == $i+2 and $No0 == $i+3 and $T[1] == $i+4)
                 or($T[2] == $i and $T[1] == $i+1 and $No1 == $i+2 and $No0 == $i+3 and $T[0] == $i+4)
                 or($T[2] == $i and $T[1] == $i+1 and $T[0] == $i+2 and $No0 == $i+3 and $No1 == $i+4)
                 or($T[2] == $i and $T[0] == $i+1 and $No1 == $i+2 and $No0 == $i+3 and $T[1] == $i+4)
                 or($T[2] == $i and $T[0] == $i+1 and $T[1] == $i+2 and $No0 == $i+3 and $No1 == $i+4)
                 or($T[2] == $i and $No1 == $i+1 and $T[1] == $i+2 and $T[0] == $i+3 and $No0 == $i+4)
                 or($T[2] == $i and $No1 == $i+1 and $T[0] == $i+2 and $T[1] == $i+3 and $No0 == $i+4)
                 or($T[2] == $i and $T[1] == $i+1 and $No1 == $i+2 and $T[0] == $i+3 and $No0 == $i+4)
                 or($T[2] == $i and $T[1] == $i+1 and $T[0] == $i+2 and $No1 == $i+3 and $No0 == $i+4)
                 or($T[2] == $i and $T[0] == $i+1 and $No1 == $i+2 and $T[1] == $i+3 and $No0 == $i+4)
                 or($T[2] == $i and $T[0] == $i+1 and $T[1] == $i+2 and $No1 == $i+3 and $No0 == $i+4)

                )
                    {
                        print("ストレート");
                         $yourscore += 50;
                         break;
                                
                    }
            }


    }    
 

//スリーオブカインド
for($i = 0; $i < 4; $i++)
    {
        for($q = 1; $q < 14; $q++)
            {
                if(($No0 == $q and $No1 == $q and $T[0] == $q)
                 or($No0 == $q and $No1 == $q and $T[1] == $q)
                 or($No0 == $q and $No1 == $q and $T[2] == $q)
                 or($No0 == $q and $T[0] == $q and $T[1] == $q)
                 or($No0 == $q and $T[0] == $q and $T[2] == $q)
                 or($No0 == $q and $T[1] == $q and $T[2] == $q)
                 or($No1 == $q and $T[0] == $q and $T[1] == $q)
                 or($No1 == $q and $T[0] == $q and $T[2] == $q)
                 or($No1 == $q and $T[1] == $q and $T[2] == $q)
                )
                    {
                        print("スリーオブカインド");
                         $yourscore += 40;
                         break;
                        
                    }
                    
            }
    }

for($i =1; $i < 14; $i++)
    {
        for($q = 1; $q < 14; $q++)
            {
                if(($No0 == $i and $No1 == $i and $T[0] == $q and $T[1] == $q)
                 or($No0 == $i and $No1 == $i and $T[0] == $q and $T[2] == $q)
                 or($No0 == $i and $No1 == $i and $T[1] == $q and $T[2] == $q)
                 or($No0 == $i and $T[0] == $i and $No1 == $q and $T[1] == $q)
                 or($No0 == $i and $T[0] == $i and $No1 == $q and $T[2] == $q)
                 or($No0 == $i and $T[1] == $i and $No1 == $q and $T[0] == $q)
                 or($No0 == $i and $T[1] == $i and $No1 == $q and $T[2] == $q)
                 or($No0 == $i and $T[2] == $i and $No1 == $q and $T[0] == $q)
                 or($No0 == $i and $T[2] == $i and $No1 == $q and $T[1] == $q)
                 or($No1 == $i and $T[0] == $i and $No0 == $q and $T[1] == $q)
                 or($No1 == $i and $T[0] == $i and $No0 == $q and $T[2] == $q)
                 or($No1 == $i and $T[1] == $i and $No0 == $q and $T[0] == $q)
                 or($No1 == $i and $T[1] == $i and $No0 == $q and $T[2] == $q)
                 or($No1 == $i and $T[2] == $i and $No0 == $q and $T[0] == $q)
                 or($No1 == $i and $T[2] == $i and $No0 == $q and $T[1] == $q)
                 or($T[0] == $i and $T[1] == $i and $No0 == $q and $No1 == $q)
                 or($T[0] == $i and $T[2] == $i and $No0 == $q and $No1 == $q)
                 or($T[1] == $i and $T[2] == $i and $No0 == $q and $No1 == $q)
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
             or($No0 == $i and $T[2] == $i)
             or($No1 == $i and $T[0] == $i)
             or($No1 == $i and $T[1] == $i)
             or($No1 == $i and $T[2] == $i))
            {
                print("ワンペア");
                 $yourscore += 20;
                 break;
                
            }
    }



?>