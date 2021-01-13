<?php

$B = 0;
//ロイヤル・フラッシュ
//p0,p1,t0,t1,t2
for($i =0; $i < 4; $i++)
    {
        for($q = 1; $q < 10; $q++)
            {      //p0
                if(($p0[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p0[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p0[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $p1[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $p1[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)

                 or($p0[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)

                 or($p0[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
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
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)

                 or($p1[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)

                 or($p1[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)
                 or($p1[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)

                
                //t0
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)
                
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)

                 or($t0[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)

                 or($t0[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)


                //t1
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $1[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)

                 or($t1[$i] == $q and $p1[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $p1[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t1[$i] == $q and $p1[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $p1[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)

                 or($t1[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)


                //t2
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)

                 or($t2[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)

                 or($t2[$i] == $q and $p1[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)
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


                //p0,p1,t0,t1,t3
                if(($p0[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p0[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p0[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $p1[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $p1[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $p1[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)

                 or($p0[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $p1[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)

                 or($p0[$i] == $q and $t3[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t3[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($p0[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)

                //p1
                 or($p1[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p1[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p1[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $p0[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $p0[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $p0[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)

                 or($p1[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $p0[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)

                 or($p1[$i] == $q and $t3[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t3[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)
                 or($p1[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)

                
                //t0
                ($t0[$i] == $q and $p1[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $p0[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t3[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)
                
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t3[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)

                 or($t0[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t3[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t3[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)

                 or($t0[$i] == $q and $t3[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t3[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t0[$i] == $q and $t3[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $t3[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)


                //t1
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $1[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t3[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $t3[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t3[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)

                 or($t1[$i] == $q and $p1[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $p1[$i] == $q+1 and $p0[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t1[$i] == $q and $p1[$i] == $q+1 and $t3[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $p1[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)

                 or($t1[$i] == $q and $t3[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t3[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t3[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t3[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t1[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)


                //t3
                 or($t3[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t3[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t3[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t3[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $p0[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)

                 or($t3[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t3[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t3[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t3[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t3[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t3[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)

                 or($t3[$i] == $q and $p1[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t3[$i] == $q and $p1[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t3[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t3[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)
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
                        print("ロイヤルストレート・フラッシュ");
                        $B=1;
                        $yourscore += 100;
                        break;
                            }
                    }

                
              //p0,p1,t0,t1,t2→p0,t0,t1,t2,t3
                 if(($p0[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p0[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p0[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t3[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t3[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)

                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)

                 or($p0[$i] == $q and $t2[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t2[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p0[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p0[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p0[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)

                //p1
                 or($t3[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t3[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t3[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t3[$i] == $q and $p0[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $p0[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)

                 or($t3[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t3[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t3[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t3[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t3[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t3[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)

                 or($t3[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t3[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t3[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t3[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)

                
                //t0
                ($t0[$i] == $q and $t3[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $t3[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t3[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $t3[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)
                
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t3[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t2[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p0[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)

                 or($t0[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $p0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t3[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $t3[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $t3[$i] == $q+4)

                 or($t0[$i] == $q and $t2[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $t3[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)


                //t1
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t3[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $p0[$i] == $q+1 and $t2[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $t3[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $p0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $t3[$i] == $q+3 and $p0[$i] == $q+4)

                 or($t1[$i] == $q and $t3[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $t3[$i] == $q+1 and $p0[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t1[$i] == $q and $t3[$i] == $q+1 and $t2[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t3[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)

                 or($t1[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $t3[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $p0[$i] == $q+4)


                //t2
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $p0[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $p0[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)

                 or($t2[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $p0[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)

                 or($t2[$i] == $q and $t3[$i] == $q+1 and $p0[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $t3[$i] == $q+1 and $p0[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $p0[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $p0[$i] == $q+4)
                 or($t2[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $p0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $p0[$i] == $q+4)
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
                        print("ロイヤルストレート・フラッシュ");
                        $yourscore += 100;
                        $B=1;
                        break;
                            }
                    }

                   //p0,p1,t0,t1,t2→p1,t0,t1,t2,t3
                 if(($p1[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p1[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p1[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t3[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t3[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)

                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $t2[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)

                 or($p1[$i] == $q and $t2[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t2[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                 or($p1[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($p1[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($p1[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)

                //p1
                 or($t3[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t3[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t3[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t3[$i] == $q and $p1[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $p1[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)

                 or($t3[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t3[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t3[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t3[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t3[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t3[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)

                 or($t3[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t3[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t3[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t3[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t3[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)

                
                //t0
                ($t0[$i] == $q and $t3[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $t3[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t0[$i] == $q and $t3[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $t3[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)
                
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t3[$i] == $q+2 and $t2[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t2[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t2[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $p1[$i] == $q+1 and $t2[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)

                 or($t0[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $p1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t3[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $t3[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t0[$i] == $q and $t1[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $t3[$i] == $q+4)

                 or($t0[$i] == $q and $t2[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $t3[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t0[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)


                //t1
                 or($t1[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $p1[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $p1[$i] == $q+1 and $t3[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $p1[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $p1[$i] == $q+1 and $t2[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t3[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $p1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $t0[$i] == $q+1 and $t2[$i] == $q+2 and $t3[$i] == $q+3 and $p1[$i] == $q+4)

                 or($t1[$i] == $q and $t3[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $t3[$i] == $q+1 and $p1[$i] == $q+2 and $t2[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t2[$i] == $q+4)
                 or($t1[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $t2[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t3[$i] == $q+1 and $t2[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t3[$i] == $q+1 and $t2[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)

                 or($t1[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $t3[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t1[$i] == $q and $t2[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $p1[$i] == $q+4)


                //t2
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $p1[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $p1[$i] == $q+2 and $t3[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $t1[$i] == $q+2 and $t3[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $t0[$i] == $q+1 and $t3[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)

                 or($t2[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $p1[$i] == $q+2 and $t3[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t3[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $t0[$i] == $q+2 and $t3[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $t1[$i] == $q+1 and $t3[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)

                 or($t2[$i] == $q and $t3[$i] == $q+1 and $p1[$i] == $q+2 and $t1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $t3[$i] == $q+1 and $p1[$i] == $q+2 and $t0[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $p1[$i] == $q+3 and $t0[$i] == $q+4)
                 or($t2[$i] == $q and $t3[$i] == $q+1 and $t1[$i] == $q+2 and $t0[$i] == $q+3 and $p1[$i] == $q+4)
                 or($t2[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $p1[$i] == $q+3 and $t1[$i] == $q+4)
                 or($t2[$i] == $q and $t3[$i] == $q+1 and $t0[$i] == $q+2 and $t1[$i] == $q+3 and $p1[$i] == $q+4)
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
                        print("ロイヤルストレート・フラッシュ");
                        $B=1;
                        $yourscore += 100;
                        break;
                            }
                    }
                
                  
            }
        
    }

//フォーオブアカインド
for($i = 0; $i < 14; $i++)
    {
        if(($No0 == $i and $No1 == $i and $T[0] == $i and $T[1] == $i)
         or($No0 == $i and $No1 == $i and $T[0] == $i and $T[2] == $i)
         or($No0 == $i and $No1 == $i and $T[0] == $i and $T[3] == $i)
         or($No0 == $i and $No1 == $i and $T[1] == $i and $T[0] == $i)
         or($No0 == $i and $No1 == $i and $T[1] == $i and $T[2] == $i)
         or($No0 == $i and $No1 == $i and $T[1] == $i and $T[3] == $i)
         or($No0 == $i and $No1 == $i and $T[2] == $i and $T[0] == $i)
         or($No0 == $i and $No1 == $i and $T[2] == $i and $T[1] == $i)
         or($No0 == $i and $No1 == $i and $T[2] == $i and $T[3] == $i)
         or($No0 == $i and $No1 == $i and $T[3] == $i and $T[0] == $i)
         or($No0 == $i and $No1 == $i and $T[3] == $i and $T[1] == $i)
         or($No0 == $i and $No1 == $i and $T[3] == $i and $T[2] == $i)

         or($No0 == $i and $T[0] == $i and $T[1] == $i and $T[2] == $i)
         or($No0 == $i and $T[0] == $i and $T[1] == $i and $T[3] == $i)

         or($No1 == $i and $T[0] == $i and $T[1] == $i and $T[2] == $i)
         or($No1 == $i and $T[0] == $i and $T[1] == $i and $T[3] == $i)
        
        
        )
            {
                print("フォーオブアカインド");
                 $yourscore += 90;
                        break;
                
            }
    }

//フルハウス

for($i =1; $i < 14; $i++)
    {
       
        for($q = 1; $q < 14; $q++)
            {
                if($i == $q)
                    {
                        continue;
                    }
                
        //p0_p1_t0
                elseif(($No0 == $i and $No1 == $i and $T[0] == $i and $T[1] == $q and $T[2] == $q)
                     or($No0 == $i and $No1 == $i and $T[0] == $i and $T[1] == $q and $T[3] == $q)
                     or($No0 == $i and $No1 == $i and $T[0] == $i and $T[2] == $q and $T[3] == $q)

                     or($No0 == $i and $No1 == $i and $T[1] == $i and $T[0] == $q and $T[2] == $q)
                     or($No0 == $i and $No1 == $i and $T[1] == $i and $T[0] == $q and $T[3] == $q)
                     or($No0 == $i and $No1 == $i and $T[1] == $i and $T[2] == $q and $T[3] == $q)

                     or($No0 == $i and $No1 == $i and $T[2] == $i and $T[0] == $q and $T[1] == $q)
                     or($No0 == $i and $No1 == $i and $T[2] == $i and $T[0] == $q and $T[3] == $q)
                     or($No0 == $i and $No1 == $i and $T[2] == $i and $T[1] == $q and $T[3] == $q)

                     or($No0 == $i and $No1 == $i and $T[3] == $i and $T[0] == $q and $T[2] == $q)
                     or($No0 == $i and $No1 == $i and $T[3] == $i and $T[0] == $q and $T[1] == $q)
                     or($No0 == $i and $No1 == $i and $T[3] == $i and $T[2] == $q and $T[1] == $q)


                     or($No0 == $i and $T[0] == $i and $T[1] == $i and $No1 == $q and $T[2] == $q)
                     or($No0 == $i and $T[0] == $i and $T[1] == $i and $No1 == $q and $T[3] == $q)
                     or($No0 == $i and $T[0] == $i and $T[2] == $i and $No1 == $q and $T[3] == $q)
                
                     or($No0 == $i and $T[1] == $i and $T[2] == $i and $No1 == $q and $T[0] == $q)
                     or($No0 == $i and $T[1] == $i and $T[2] == $i and $No1 == $q and $T[3] == $q)
                     or($No0 == $i and $T[1] == $i and $T[3] == $i and $No1 == $q and $T[2] == $q)


                     or($No1 == $i and $T[0] == $i and $T[1] == $i and $No0 == $q and $T[2] == $q)
                     or($No1 == $i and $T[0] == $i and $T[1] == $i and $No0 == $q and $T[3] == $q)
                     or($No1 == $i and $T[0] == $i and $T[2] == $i and $No0 == $q and $T[3] == $q)
                
                     or($No1 == $i and $T[1] == $i and $T[2] == $i and $No0 == $q and $T[0] == $q)
                     or($No1 == $i and $T[1] == $i and $T[2] == $i and $No0 == $q and $T[3] == $q)
                     or($No1 == $i and $T[1] == $i and $T[3] == $i and $No0 == $q and $T[2] == $q)

                //p0
                     or($No0 == $i and $T[0] == $i and $T[1] == $i and $T[2] == $q and $T[3] == $q)
                     or($No0 == $i and $T[0] == $i and $T[2] == $i and $T[1] == $q and $T[3] == $q)
                     or($No0 == $i and $T[0] == $i and $T[3] == $i and $T[1] == $q and $T[2] == $q)

                     or($No0 == $i and $T[1] == $i and $T[2] == $i and $T[0] == $q and $T[3] == $q)
                     or($No0 == $i and $T[1] == $i and $T[3] == $i and $T[0] == $q and $T[2] == $q)

                     or($T[0] == $i and $T[1] == $i and $T[2] == $i and $T[3] == $q and $No0 == $q)
                     or($T[0] == $i and $T[1] == $i and $T[3] == $i and $T[2] == $q and $No0 == $q)
                     or($T[0] == $i and $T[2] == $i and $T[3] == $i and $T[1] == $q and $No0 == $q)
                     or($T[1] == $i and $T[2] == $i and $T[3] == $i and $T[0] == $q and $No0 == $q)

                //p1
                     or($No1 == $i and $T[0] == $i and $T[1] == $i and $T[2] == $q and $T[3] == $q)
                     or($No1 == $i and $T[0] == $i and $T[2] == $i and $T[1] == $q and $T[3] == $q)
                     or($No1 == $i and $T[0] == $i and $T[3] == $i and $T[1] == $q and $T[2] == $q)

                     or($No1 == $i and $T[1] == $i and $T[2] == $i and $T[0] == $q and $T[3] == $q)
                     or($No1 == $i and $T[1] == $i and $T[3] == $i and $T[0] == $q and $T[2] == $q)

                     or($T[0] == $i and $T[1] == $i and $T[2] == $i and $T[3] == $q and $No1 == $q)
                     or($T[0] == $i and $T[1] == $i and $T[3] == $i and $T[2] == $q and $No1 == $q)
                     or($T[0] == $i and $T[2] == $i and $T[3] == $i and $T[1] == $q and $No1 == $q)
                     or($T[1] == $i and $T[2] == $i and $T[3] == $i and $T[0] == $q and $No1 == $q)
                )
                    {
                        print("フルハウス");
                         $yourscore += 80;
                        break;
                    }
            }
    }
//フラッシュ
if($B==0)
 {
for($i =0 < $i < 4; $i++)
    {
        if(($p0[$i] < 14 and $p1[$i] < 14 and $t0[$i] < 14 and $t1[$i] < 14 and $t2[$i] < 14)
         or($p0[$i] < 14 and $p1[$i] < 14 and $t0[$i] < 14 and $t1[$i] < 14 and $t3[$i] < 14)
         or($p0[$i] < 14 and $p1[$i] < 14 and $t0[$i] < 14 and $t2[$i] < 14 and $t3[$i] < 14)
         or($p0[$i] < 14 and $p1[$i] < 14 and $t1[$i] < 14 and $t2[$i] < 14 and $t3[$i] < 14)
         or($p0[$i] < 14 and $t0[$i] < 14 and $t1[$i] < 14 and $t2[$i] < 14 and $t3[$i] < 14)
         or($p1[$i] < 14 and $t0[$i] < 14 and $t1[$i] < 14 and $t2[$i] < 14 and $t3[$i] < 14)
        
        )
            {
                
                print("フラッシュ");
                 $yourscore += 70;
                        break;
                    
            }
    }

 
//ストレート
        for($q = 1; $q < 10; $q++)
            {
                if(($No0 == $q and $No1 == $q+1 and $T[0] == $q+2 and $T[1] == $q+3 and $T[2] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[0] == $q+2 and $T[1] == $q+3 and $T[3] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[0] == $q+2 and $T[2] == $q+3 and $T[1] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[0] == $q+2 and $T[2] == $q+3 and $T[3] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[0] == $q+2 and $T[3] == $q+3 and $T[1] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[0] == $q+2 and $T[3] == $q+3 and $T[2] == $q+4 )
                
                 or($No0 == $q and $No1 == $q+1 and $T[1] == $q+2 and $T[0] == $q+3 and $T[2] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[1] == $q+2 and $T[0] == $q+3 and $T[3] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[1] == $q+2 and $T[2] == $q+3 and $T[0] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[1] == $q+2 and $T[2] == $q+3 and $T[3] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[1] == $q+2 and $T[3] == $q+3 and $T[0] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[1] == $q+2 and $T[3] == $q+3 and $T[2] == $q+4 )
                
                 or($No0 == $q and $No1 == $q+1 and $T[2] == $q+2 and $T[0] == $q+3 and $T[1] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[2] == $q+2 and $T[0] == $q+3 and $T[3] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[2] == $q+2 and $T[1] == $q+3 and $T[0] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[2] == $q+2 and $T[1] == $q+3 and $T[3] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[2] == $q+2 and $T[3] == $q+3 and $T[0] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[2] == $q+2 and $T[3] == $q+3 and $T[1] == $q+4 )

                 or($No0 == $q and $No1 == $q+1 and $T[3] == $q+2 and $T[0] == $q+3 and $T[1] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[3] == $q+2 and $T[0] == $q+3 and $T[2] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[3] == $q+2 and $T[1] == $q+3 and $T[0] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[3] == $q+2 and $T[1] == $q+3 and $T[2] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[3] == $q+2 and $T[2] == $q+3 and $T[0] == $q+4 )
                 or($No0 == $q and $No1 == $q+1 and $T[3] == $q+2 and $T[2] == $q+3 and $T[1] == $q+4 )

                 or($No0 == $q and $T[0] == $q+1 and $T[1] == $q+2 and $T[2] == $q+3 and $T[3] == $q+4 )
                


                for($i = 0; $i < 4; $i++)
                    {
                 or($No0 == $q and $T[$i] == $q+1 and $No1 == $q+2 and $T[1] == $q+3 and $T[2] == $q+4 )
                 or($No0 == $q and $T[$i] == $q+1 and $No1 == $q+2 and $T[1] == $q+3 and $T[3] == $q+4 )
                 or($No0 == $q and $T[$i] == $q+1 and $No1 == $q+2 and $T[2] == $q+3 and $T[1] == $q+4 )
                 or($No0 == $q and $T[$i] == $q+1 and $No1 == $q+2 and $T[2] == $q+3 and $T[3] == $q+4 )
                 or($No0 == $q and $T[$i] == $q+1 and $No1 == $q+2 and $T[3] == $q+3 and $T[1] == $q+4 )
                 or($No0 == $q and $T[$i] == $q+1 and $No1 == $q+2 and $T[3] == $q+3 and $T[2] == $q+4 )
                
                 or($No0 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $No1 == $q+3 and $T[2] == $q+4 )
                 or($No0 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $No1 == $q+3 and $T[3] == $q+4 )
                 or($No0 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $No1 == $q+3 and $T[0] == $q+4 )
                 or($No0 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $No1 == $q+3 and $T[3] == $q+4 )
                 or($No0 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $No1 == $q+3 and $T[0] == $q+4 )
                 or($No0 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $No1 == $q+3 and $T[2] == $q+4 )
                
                 or($No0 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $T[$i] == $q+3 and $No1 == $q+4 )
                 or($No0 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $T[$i] == $q+3 and $No1 == $q+4 )
                 or($No0 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $T[$i] == $q+3 and $No1 == $q+4 )
                 or($No0 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $T[$i] == $q+3 and $No1 == $q+4 )
                 or($No0 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $T[$i] == $q+3 and $No1 == $q+4 )
                 or($No0 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $T[$i] == $q+3 and $No1 == $q+4 )
                    }

                //p1
                 or($No1 == $q and $No0 == $q+1 and $T[0] == $q+2 and $T[1] == $q+3 and $T[2] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[0] == $q+2 and $T[1] == $q+3 and $T[3] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[0] == $q+2 and $T[2] == $q+3 and $T[1] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[0] == $q+2 and $T[2] == $q+3 and $T[3] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[0] == $q+2 and $T[3] == $q+3 and $T[1] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[0] == $q+2 and $T[3] == $q+3 and $T[2] == $q+4 )
                
                 or($No1 == $q and $No0 == $q+1 and $T[1] == $q+2 and $T[0] == $q+3 and $T[2] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[1] == $q+2 and $T[0] == $q+3 and $T[3] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[1] == $q+2 and $T[2] == $q+3 and $T[0] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[1] == $q+2 and $T[2] == $q+3 and $T[3] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[1] == $q+2 and $T[3] == $q+3 and $T[0] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[1] == $q+2 and $T[3] == $q+3 and $T[2] == $q+4 )
                
                 or($No1 == $q and $No0 == $q+1 and $T[2] == $q+2 and $T[0] == $q+3 and $T[1] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[2] == $q+2 and $T[0] == $q+3 and $T[3] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[2] == $q+2 and $T[1] == $q+3 and $T[0] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[2] == $q+2 and $T[1] == $q+3 and $T[3] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[2] == $q+2 and $T[3] == $q+3 and $T[0] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[2] == $q+2 and $T[3] == $q+3 and $T[1] == $q+4 )

                 or($No1 == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[0] == $q+3 and $T[1] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[0] == $q+3 and $T[2] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[1] == $q+3 and $T[0] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[1] == $q+3 and $T[2] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[2] == $q+3 and $T[0] == $q+4 )
                 or($No1 == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[2] == $q+3 and $T[1] == $q+4 )


                 for($i = 0; $i < 4; $i++)
                    {
                 or($No1 == $q and $T[$i] == $q+1 and $No0 == $q+2 and $T[1] == $q+3 and $T[2] == $q+4 )
                 or($No1 == $q and $T[$i] == $q+1 and $No0 == $q+2 and $T[1] == $q+3 and $T[3] == $q+4 )
                 or($No1 == $q and $T[$i] == $q+1 and $No0 == $q+2 and $T[2] == $q+3 and $T[1] == $q+4 )
                 or($No1 == $q and $T[$i] == $q+1 and $No0 == $q+2 and $T[2] == $q+3 and $T[3] == $q+4 )
                 or($No1 == $q and $T[$i] == $q+1 and $No0 == $q+2 and $T[3] == $q+3 and $T[1] == $q+4 )
                 or($No1 == $q and $T[$i] == $q+1 and $No0 == $q+2 and $T[3] == $q+3 and $T[2] == $q+4 )
                
                 or($No1 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $No0 == $q+3 and $T[2] == $q+4 )
                 or($No1 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $No0 == $q+3 and $T[3] == $q+4 )
                 or($No1 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $No0 == $q+3 and $T[0] == $q+4 )
                 or($No1 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $No0 == $q+3 and $T[3] == $q+4 )
                 or($No1 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $No0 == $q+3 and $T[0] == $q+4 )
                 or($No1 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $No0 == $q+3 and $T[2] == $q+4 )
                
                 or($No1 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $T[$i] == $q+3 and $No0 == $q+4 )
                 or($No1 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $T[$i] == $q+3 and $No0 == $q+4 )
                 or($No1 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $T[$i] == $q+3 and $No0 == $q+4 )
                 or($No1 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $T[$i] == $q+3 and $No0 == $q+4 )
                 or($No1 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $T[$i] == $q+3 and $No0 == $q+4 )
                 or($No1 == $q and $T[$i] == $q+1 and $T[$i] == $q+2 and $T[$i] == $q+3 and $No0 == $q+4 )
                    }
                 or($No1 == $q and $T[0] == $q+1 and $T[1] == $q+2 and $T[2] == $q+3 and $T[3] == $q+4 )


                //T[0]
                for($w =0; $w < 4; $w++)
                    {
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[1] == $q+3 and $T[2] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[1] == $q+3 and $T[3] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[2] == $q+3 and $T[1] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[2] == $q+3 and $T[3] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[3] == $q+3 and $T[1] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[3] == $q+3 and $T[2] == $q+4 )
                
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[0] == $q+3 and $T[2] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[0] == $q+3 and $T[3] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[2] == $q+3 and $T[0] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[2] == $q+3 and $T[3] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[3] == $q+3 and $T[0] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[3] == $q+3 and $T[2] == $q+4 )
                
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[0] == $q+3 and $T[1] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[0] == $q+3 and $T[3] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[1] == $q+3 and $T[0] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[1] == $q+3 and $T[3] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[3] == $q+3 and $T[0] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $No1 == $q+2 and $T[3] == $q+3 and $T[1] == $q+4 )

                 or($T[$w] == $q and $No0 == $q+1 and $T[3] == $q+2 and $No1 == $q+3 and $T[1] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $T[3] == $q+2 and $No1 == $q+3 and $T[2] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $T[3] == $q+2 and $No1 == $q+3 and $T[0] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $T[3] == $q+2 and $No1 == $q+3 and $T[2] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $T[3] == $q+2 and $No1 == $q+3 and $T[0] == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $T[3] == $q+2 and $No1 == $q+3 and $T[1] == $q+4 )

                 or($T[$w] == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[1] == $q+3 and $No1 == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[2] == $q+3 and $No1 == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[0] == $q+3 and $No1 == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[1] == $q+3 and $No1 == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[0] == $q+3 and $No1 == $q+4 )
                 or($T[$w] == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[1] == $q+3 and $No1 == $q+4 )             
                    }
                
                 or($T[0] == $q and $No0 == $q+1 and $T[1] == $q+2 and $T[2] == $q+3 and $T[3] == $q+4)
                 or($T[0] == $q and $No0 == $q+1 and $T[1] == $q+2 and $T[3] == $q+3 and $T[2] == $q+4)
                 or($T[0] == $q and $No0 == $q+1 and $T[2] == $q+2 and $T[1] == $q+3 and $T[3] == $q+4)
                 or($T[0] == $q and $No0 == $q+1 and $T[2] == $q+2 and $T[3] == $q+3 and $T[1] == $q+4)
                 or($T[0] == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[1] == $q+3 and $T[2] == $q+4)
                 or($T[0] == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[2] == $q+3 and $T[1] == $q+4)

                 or($T[0] == $q and $T[1] == $q+1 and $No0 == $q+2 and $T[2] == $q+3 and $T[3] == $q+4)
                 or($T[0] == $q and $T[1] == $q+1 and $No0 == $q+2 and $T[3] == $q+3 and $T[2] == $q+4)
                 or($T[0] == $q and $T[2] == $q+1 and $No0 == $q+2 and $T[1] == $q+3 and $T[3] == $q+4)
                 or($T[0] == $q and $T[2] == $q+1 and $No0 == $q+2 and $T[3] == $q+3 and $T[1] == $q+4)
                 or($T[0] == $q and $T[3] == $q+1 and $No0 == $q+2 and $T[1] == $q+3 and $T[2] == $q+4)
                 or($T[0] == $q and $T[3] == $q+1 and $No0 == $q+2 and $T[2] == $q+3 and $T[1] == $q+4)

                 or($T[0] == $q and $T[1] == $q+1 and $T[2] == $q+2 and $No0 == $q+3 and $T[3] == $q+4)
                 or($T[0] == $q and $T[1] == $q+1 and $T[3] == $q+2 and $No0 == $q+3 and $T[2] == $q+4)
                 or($T[0] == $q and $T[2] == $q+1 and $T[1] == $q+2 and $No0 == $q+3 and $T[3] == $q+4)
                 or($T[0] == $q and $T[2] == $q+1 and $T[3] == $q+2 and $No0 == $q+3 and $T[1] == $q+4)
                 or($T[0] == $q and $T[3] == $q+1 and $T[1] == $q+2 and $No0 == $q+3 and $T[2] == $q+4)
                 or($T[0] == $q and $T[3] == $q+1 and $T[2] == $q+2 and $No0 == $q+3 and $T[1] == $q+4)

                 or($T[0] == $q and $T[1] == $q+1 and $T[2] == $q+2 and $T[3] == $q+3 and $No0 == $q+4)
                 or($T[0] == $q and $T[1] == $q+1 and $T[3] == $q+2 and $T[2] == $q+3 and $No0 == $q+4)
                 or($T[0] == $q and $T[2] == $q+1 and $T[1] == $q+2 and $T[3] == $q+3 and $No0 == $q+4)
                 or($T[0] == $q and $T[2] == $q+1 and $T[3] == $q+2 and $T[1] == $q+3 and $No0 == $q+4)
                 or($T[0] == $q and $T[3] == $q+1 and $T[1] == $q+2 and $T[2] == $q+3 and $No0 == $q+4)
                 or($T[0] == $q and $T[3] == $q+1 and $T[2] == $q+2 and $T[1] == $q+3 and $No0 == $q+4)

                 or($T[0] == $q and $No1 == $q+1 and $T[1] == $q+2 and $T[2] == $q+3 and $T[3] == $q+4)
                 or($T[0] == $q and $No1 == $q+1 and $T[1] == $q+2 and $T[3] == $q+3 and $T[2] == $q+4)
                 or($T[0] == $q and $No1 == $q+1 and $T[2] == $q+2 and $T[1] == $q+3 and $T[3] == $q+4)
                 or($T[0] == $q and $No1 == $q+1 and $T[2] == $q+2 and $T[3] == $q+3 and $T[1] == $q+4)
                 or($T[0] == $q and $No1 == $q+1 and $T[3] == $q+2 and $T[1] == $q+3 and $T[2] == $q+4)
                 or($T[0] == $q and $No1 == $q+1 and $T[3] == $q+2 and $T[2] == $q+3 and $T[1] == $q+4)

                 or($T[0] == $q and $T[1] == $q+1 and $No1 == $q+2 and $T[2] == $q+3 and $T[3] == $q+4)
                 or($T[0] == $q and $T[1] == $q+1 and $No1 == $q+2 and $T[3] == $q+3 and $T[2] == $q+4)
                 or($T[0] == $q and $T[2] == $q+1 and $No1 == $q+2 and $T[1] == $q+3 and $T[3] == $q+4)
                 or($T[0] == $q and $T[2] == $q+1 and $No1 == $q+2 and $T[3] == $q+3 and $T[1] == $q+4)
                 or($T[0] == $q and $T[3] == $q+1 and $No1 == $q+2 and $T[1] == $q+3 and $T[2] == $q+4)
                 or($T[0] == $q and $T[3] == $q+1 and $No1 == $q+2 and $T[2] == $q+3 and $T[1] == $q+4)

                 or($T[0] == $q and $T[1] == $q+1 and $T[2] == $q+2 and $No1 == $q+3 and $T[3] == $q+4)
                 or($T[0] == $q and $T[1] == $q+1 and $T[3] == $q+2 and $No1 == $q+3 and $T[2] == $q+4)
                 or($T[0] == $q and $T[2] == $q+1 and $T[1] == $q+2 and $No1 == $q+3 and $T[3] == $q+4)
                 or($T[0] == $q and $T[2] == $q+1 and $T[3] == $q+2 and $No1 == $q+3 and $T[1] == $q+4)
                 or($T[0] == $q and $T[3] == $q+1 and $T[1] == $q+2 and $No1 == $q+3 and $T[2] == $q+4)
                 or($T[0] == $q and $T[3] == $q+1 and $T[2] == $q+2 and $No1 == $q+3 and $T[1] == $q+4)

                 or($T[0] == $q and $T[1] == $q+1 and $T[2] == $q+2 and $T[3] == $q+3 and $No1 == $q+4)
                 or($T[0] == $q and $T[1] == $q+1 and $T[3] == $q+2 and $T[2] == $q+3 and $No1 == $q+4)
                 or($T[0] == $q and $T[2] == $q+1 and $T[1] == $q+2 and $T[3] == $q+3 and $No1 == $q+4)
                 or($T[0] == $q and $T[2] == $q+1 and $T[3] == $q+2 and $T[1] == $q+3 and $No1 == $q+4)
                 or($T[0] == $q and $T[3] == $q+1 and $T[1] == $q+2 and $T[2] == $q+3 and $No1 == $q+4)
                 or($T[0] == $q and $T[3] == $q+1 and $T[2] == $q+2 and $T[1] == $q+3 and $No1 == $q+4)



                 or($T[1] == $q and $No0 == $q+1 and $T[0] == $q+2 and $T[2] == $q+3 and $T[3] == $q+4)
                 or($T[1] == $q and $No0 == $q+1 and $T[0] == $q+2 and $T[3] == $q+3 and $T[2] == $q+4)
                 or($T[1] == $q and $No0 == $q+1 and $T[2] == $q+2 and $T[0] == $q+3 and $T[3] == $q+4)
                 or($T[1] == $q and $No0 == $q+1 and $T[2] == $q+2 and $T[3] == $q+3 and $T[0] == $q+4)
                 or($T[1] == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[0] == $q+3 and $T[2] == $q+4)
                 or($T[1] == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[2] == $q+3 and $T[0] == $q+4)

                 or($T[1] == $q and $T[0] == $q+1 and $No0 == $q+2 and $T[2] == $q+3 and $T[3] == $q+4)
                 or($T[1] == $q and $T[0] == $q+1 and $No0 == $q+2 and $T[3] == $q+3 and $T[2] == $q+4)
                 or($T[1] == $q and $T[2] == $q+1 and $No0 == $q+2 and $T[0] == $q+3 and $T[3] == $q+4)
                 or($T[1] == $q and $T[2] == $q+1 and $No0 == $q+2 and $T[3] == $q+3 and $T[0] == $q+4)
                 or($T[1] == $q and $T[3] == $q+1 and $No0 == $q+2 and $T[0] == $q+3 and $T[2] == $q+4)
                 or($T[1] == $q and $T[3] == $q+1 and $No0 == $q+2 and $T[2] == $q+3 and $T[0] == $q+4)

                 or($T[1] == $q and $T[0] == $q+1 and $T[2] == $q+2 and $No0 == $q+3 and $T[3] == $q+4)
                 or($T[1] == $q and $T[0] == $q+1 and $T[3] == $q+2 and $No0 == $q+3 and $T[2] == $q+4)
                 or($T[1] == $q and $T[2] == $q+1 and $T[0] == $q+2 and $No0 == $q+3 and $T[3] == $q+4)
                 or($T[1] == $q and $T[2] == $q+1 and $T[3] == $q+2 and $No0 == $q+3 and $T[0] == $q+4)
                 or($T[1] == $q and $T[3] == $q+1 and $T[0] == $q+2 and $No0 == $q+3 and $T[2] == $q+4)
                 or($T[1] == $q and $T[3] == $q+1 and $T[2] == $q+2 and $No0 == $q+3 and $T[0] == $q+4)

                 or($T[1] == $q and $T[0] == $q+1 and $T[2] == $q+2 and $T[3] == $q+3 and $No0 == $q+4)
                 or($T[1] == $q and $T[0] == $q+1 and $T[3] == $q+2 and $T[2] == $q+3 and $No0 == $q+4)
                 or($T[1] == $q and $T[2] == $q+1 and $T[0] == $q+2 and $T[3] == $q+3 and $No0 == $q+4)
                 or($T[1] == $q and $T[2] == $q+1 and $T[3] == $q+2 and $T[0] == $q+3 and $No0 == $q+4)
                 or($T[1] == $q and $T[3] == $q+1 and $T[0] == $q+2 and $T[2] == $q+3 and $No0 == $q+4)
                 or($T[1] == $q and $T[3] == $q+1 and $T[2] == $q+2 and $T[0] == $q+3 and $No0 == $q+4)

                 or($T[1] == $q and $No1 == $q+1 and $T[0] == $q+2 and $T[2] == $q+3 and $T[3] == $q+4)
                 or($T[1] == $q and $No1 == $q+1 and $T[0] == $q+2 and $T[3] == $q+3 and $T[2] == $q+4)
                 or($T[1] == $q and $No1 == $q+1 and $T[2] == $q+2 and $T[0] == $q+3 and $T[3] == $q+4)
                 or($T[1] == $q and $No1 == $q+1 and $T[2] == $q+2 and $T[3] == $q+3 and $T[0] == $q+4)
                 or($T[1] == $q and $No1 == $q+1 and $T[3] == $q+2 and $T[0] == $q+3 and $T[2] == $q+4)
                 or($T[1] == $q and $No1 == $q+1 and $T[3] == $q+2 and $T[2] == $q+3 and $T[0] == $q+4)

                 or($T[1] == $q and $T[0] == $q+1 and $No1 == $q+2 and $T[2] == $q+3 and $T[3] == $q+4)
                 or($T[1] == $q and $T[0] == $q+1 and $No1 == $q+2 and $T[3] == $q+3 and $T[2] == $q+4)
                 or($T[1] == $q and $T[2] == $q+1 and $No1 == $q+2 and $T[0] == $q+3 and $T[3] == $q+4)
                 or($T[1] == $q and $T[2] == $q+1 and $No1 == $q+2 and $T[3] == $q+3 and $T[0] == $q+4)
                 or($T[1] == $q and $T[3] == $q+1 and $No1 == $q+2 and $T[0] == $q+3 and $T[2] == $q+4)
                 or($T[1] == $q and $T[3] == $q+1 and $No1 == $q+2 and $T[2] == $q+3 and $T[0] == $q+4)

                 or($T[1] == $q and $T[0] == $q+1 and $T[2] == $q+2 and $No1 == $q+3 and $T[3] == $q+4)
                 or($T[1] == $q and $T[0] == $q+1 and $T[3] == $q+2 and $No1 == $q+3 and $T[2] == $q+4)
                 or($T[1] == $q and $T[2] == $q+1 and $T[0] == $q+2 and $No1 == $q+3 and $T[3] == $q+4)
                 or($T[1] == $q and $T[2] == $q+1 and $T[3] == $q+2 and $No1 == $q+3 and $T[0] == $q+4)
                 or($T[1] == $q and $T[3] == $q+1 and $T[0] == $q+2 and $No1 == $q+3 and $T[2] == $q+4)
                 or($T[1] == $q and $T[3] == $q+1 and $T[2] == $q+2 and $No1 == $q+3 and $T[0] == $q+4)

                 or($T[1] == $q and $T[0] == $q+1 and $T[2] == $q+2 and $T[3] == $q+3 and $No1 == $q+4)
                 or($T[1] == $q and $T[0] == $q+1 and $T[3] == $q+2 and $T[2] == $q+3 and $No1 == $q+4)
                 or($T[1] == $q and $T[2] == $q+1 and $T[0] == $q+2 and $T[3] == $q+3 and $No1 == $q+4)
                 or($T[1] == $q and $T[2] == $q+1 and $T[3] == $q+2 and $T[0] == $q+3 and $No1 == $q+4)
                 or($T[1] == $q and $T[3] == $q+1 and $T[0] == $q+2 and $T[2] == $q+3 and $No1 == $q+4)
                 or($T[1] == $q and $T[3] == $q+1 and $T[2] == $q+2 and $T[0] == $q+3 and $No1 == $q+4)


                or($T[2] == $q and $No0 == $q+1 and $T[1] == $q+2 and $T[0] == $q+3 and $T[3] == $q+4)
                 or($T[2] == $q and $No0 == $q+1 and $T[1] == $q+2 and $T[3] == $q+3 and $T[0] == $q+4)
                 or($T[2] == $q and $No0 == $q+1 and $T[0] == $q+2 and $T[1] == $q+3 and $T[3] == $q+4)
                 or($T[2] == $q and $No0 == $q+1 and $T[0] == $q+2 and $T[3] == $q+3 and $T[1] == $q+4)
                 or($T[2] == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[1] == $q+3 and $T[0] == $q+4)
                 or($T[2] == $q and $No0 == $q+1 and $T[3] == $q+2 and $T[0] == $q+3 and $T[1] == $q+4)

                 or($T[2] == $q and $T[1] == $q+1 and $No0 == $q+2 and $T[0] == $q+3 and $T[3] == $q+4)
                 or($T[2] == $q and $T[1] == $q+1 and $No0 == $q+2 and $T[3] == $q+3 and $T[0] == $q+4)
                 or($T[2] == $q and $T[0] == $q+1 and $No0 == $q+2 and $T[1] == $q+3 and $T[3] == $q+4)
                 or($T[2] == $q and $T[0] == $q+1 and $No0 == $q+2 and $T[3] == $q+3 and $T[1] == $q+4)
                 or($T[2] == $q and $T[0] == $q+1 and $No0 == $q+2 and $T[1] == $q+3 and $T[2] == $q+4)
                 or($T[2] == $q and $T[3] == $q+1 and $No0 == $q+2 and $T[0] == $q+3 and $T[1] == $q+4)

                 or($T[2] == $q and $T[1] == $q+1 and $T[0] == $q+2 and $No0 == $q+3 and $T[3] == $q+4)
                 or($T[2] == $q and $T[1] == $q+1 and $T[3] == $q+2 and $No0 == $q+3 and $T[0] == $q+4)
                 or($T[2] == $q and $T[0] == $q+1 and $T[1] == $q+2 and $No0 == $q+3 and $T[3] == $q+4)
                 or($T[2] == $q and $T[0] == $q+1 and $T[3] == $q+2 and $No0 == $q+3 and $T[1] == $q+4)
                 or($T[2] == $q and $T[3] == $q+1 and $T[1] == $q+2 and $No0 == $q+3 and $T[0] == $q+4)
                 or($T[2] == $q and $T[3] == $q+1 and $T[0] == $q+2 and $No0 == $q+3 and $T[1] == $q+4)

                 or($T[2] == $q and $T[1] == $q+1 and $T[0] == $q+2 and $T[3] == $q+3 and $No0 == $q+4)
                 or($T[2] == $q and $T[1] == $q+1 and $T[3] == $q+2 and $T[0] == $q+3 and $No0 == $q+4)
                 or($T[2] == $q and $T[0] == $q+1 and $T[1] == $q+2 and $T[3] == $q+3 and $No0 == $q+4)
                 or($T[2] == $q and $T[0] == $q+1 and $T[3] == $q+2 and $T[1] == $q+3 and $No0 == $q+4)
                 or($T[2] == $q and $T[3] == $q+1 and $T[1] == $q+2 and $T[0] == $q+3 and $No0 == $q+4)
                 or($T[2] == $q and $T[3] == $q+1 and $T[0] == $q+2 and $T[1] == $q+3 and $No0 == $q+4)

                 or($T[2] == $q and $No1 == $q+1 and $T[1] == $q+2 and $T[0] == $q+3 and $T[3] == $q+4)
                 or($T[2] == $q and $No1 == $q+1 and $T[1] == $q+2 and $T[3] == $q+3 and $T[0] == $q+4)
                 or($T[2] == $q and $No1 == $q+1 and $T[0] == $q+2 and $T[1] == $q+3 and $T[3] == $q+4)
                 or($T[2] == $q and $No1 == $q+1 and $T[0] == $q+2 and $T[3] == $q+3 and $T[1] == $q+4)
                 or($T[2] == $q and $No1 == $q+1 and $T[3] == $q+2 and $T[1] == $q+3 and $T[0] == $q+4)
                 or($T[2] == $q and $No1 == $q+1 and $T[3] == $q+2 and $T[0] == $q+3 and $T[1] == $q+4)

                 or($T[2] == $q and $T[1] == $q+1 and $No1 == $q+2 and $T[0] == $q+3 and $T[3] == $q+4)
                 or($T[2] == $q and $T[1] == $q+1 and $No1 == $q+2 and $T[3] == $q+3 and $T[0] == $q+4)
                 or($T[2] == $q and $T[0] == $q+1 and $No1 == $q+2 and $T[1] == $q+3 and $T[3] == $q+4)
                 or($T[2] == $q and $T[0] == $q+1 and $No1 == $q+2 and $T[3] == $q+3 and $T[1] == $q+4)
                 or($T[2] == $q and $T[3] == $q+1 and $No1 == $q+2 and $T[1] == $q+3 and $T[0] == $q+4)
                 or($T[2] == $q and $T[3] == $q+1 and $No1 == $q+2 and $T[0] == $q+3 and $T[1] == $q+4)

                 or($T[2] == $q and $T[1] == $q+1 and $T[0] == $q+2 and $No1 == $q+3 and $T[3] == $q+4)
                 or($T[2] == $q and $T[1] == $q+1 and $T[3] == $q+2 and $No1 == $q+3 and $T[0] == $q+4)
                 or($T[2] == $q and $T[0] == $q+1 and $T[1] == $q+2 and $No1 == $q+3 and $T[3] == $q+4)
                 or($T[2] == $q and $T[0] == $q+1 and $T[3] == $q+2 and $No1 == $q+3 and $T[1] == $q+4)
                 or($T[2] == $q and $T[3] == $q+1 and $T[1] == $q+2 and $No1 == $q+3 and $T[0] == $q+4)
                 or($T[2] == $q and $T[3] == $q+1 and $T[0] == $q+2 and $No1 == $q+3 and $T[1] == $q+4)

                 or($T[2] == $q and $T[1] == $q+1 and $T[0] == $q+2 and $T[3] == $q+3 and $No1 == $q+4)
                 or($T[2] == $q and $T[1] == $q+1 and $T[3] == $q+2 and $T[0] == $q+3 and $No1 == $q+4)
                 or($T[2] == $q and $T[0] == $q+1 and $T[1] == $q+2 and $T[3] == $q+3 and $No1 == $q+4)
                 or($T[2] == $q and $T[0] == $q+1 and $T[3] == $q+2 and $T[1] == $q+3 and $No1 == $q+4)
                 or($T[2] == $q and $T[3] == $q+1 and $T[1] == $q+2 and $T[0] == $q+3 and $No1 == $q+4)
                 or($T[2] == $q and $T[3] == $q+1 and $T[0] == $q+2 and $T[1] == $q+3 and $No1 == $q+4)


                 or($T[3] == $q and $No0 == $q+1 and $T[1] == $q+2 and $T[2] == $q+3 and $T[0] == $q+4)
                 or($T[3] == $q and $No0 == $q+1 and $T[1] == $q+2 and $T[0] == $q+3 and $T[2] == $q+4)
                 or($T[3] == $q and $No0 == $q+1 and $T[2] == $q+2 and $T[1] == $q+3 and $T[0] == $q+4)
                 or($T[3] == $q and $No0 == $q+1 and $T[2] == $q+2 and $T[0] == $q+3 and $T[1] == $q+4)
                 or($T[3] == $q and $No0 == $q+1 and $T[0] == $q+2 and $T[1] == $q+3 and $T[2] == $q+4)
                 or($T[3] == $q and $No0 == $q+1 and $T[0] == $q+2 and $T[2] == $q+3 and $T[1] == $q+4)

                 or($T[3] == $q and $T[1] == $q+1 and $No0 == $q+2 and $T[2] == $q+3 and $T[0] == $q+4)
                 or($T[3] == $q and $T[1] == $q+1 and $No0 == $q+2 and $T[0] == $q+3 and $T[2] == $q+4)
                 or($T[3] == $q and $T[2] == $q+1 and $No0 == $q+2 and $T[1] == $q+3 and $T[0] == $q+4)
                 or($T[3] == $q and $T[2] == $q+1 and $No0 == $q+2 and $T[0] == $q+3 and $T[1] == $q+4)
                 or($T[3] == $q and $T[0] == $q+1 and $No0 == $q+2 and $T[1] == $q+3 and $T[2] == $q+4)
                 or($T[3] == $q and $T[0] == $q+1 and $No0 == $q+2 and $T[2] == $q+3 and $T[1] == $q+4)

                 or($T[3] == $q and $T[1] == $q+1 and $T[2] == $q+2 and $No0 == $q+3 and $T[0] == $q+4)
                 or($T[3] == $q and $T[1] == $q+1 and $T[0] == $q+2 and $No0 == $q+3 and $T[2] == $q+4)
                 or($T[3] == $q and $T[2] == $q+1 and $T[1] == $q+2 and $No0 == $q+3 and $T[0] == $q+4)
                 or($T[3] == $q and $T[2] == $q+1 and $T[0] == $q+2 and $No0 == $q+3 and $T[1] == $q+4)
                 or($T[3] == $q and $T[0] == $q+1 and $T[1] == $q+2 and $No0 == $q+3 and $T[2] == $q+4)
                 or($T[3] == $q and $T[0] == $q+1 and $T[2] == $q+2 and $No0 == $q+3 and $T[1] == $q+4)

                 or($T[3] == $q and $T[1] == $q+1 and $T[2] == $q+2 and $T[0] == $q+3 and $No0 == $q+4)
                 or($T[3] == $q and $T[1] == $q+1 and $T[0] == $q+2 and $T[2] == $q+3 and $No0 == $q+4)
                 or($T[3] == $q and $T[2] == $q+1 and $T[1] == $q+2 and $T[0] == $q+3 and $No0 == $q+4)
                 or($T[3] == $q and $T[2] == $q+1 and $T[0] == $q+2 and $T[1] == $q+3 and $No0 == $q+4)
                 or($T[3] == $q and $T[0] == $q+1 and $T[1] == $q+2 and $T[2] == $q+3 and $No0 == $q+4)
                 or($T[3] == $q and $T[0] == $q+1 and $T[2] == $q+2 and $T[1] == $q+3 and $No0 == $q+4)

                 or($T[3] == $q and $No1 == $q+1 and $T[1] == $q+2 and $T[2] == $q+3 and $T[0] == $q+4)
                 or($T[3] == $q and $No1 == $q+1 and $T[1] == $q+2 and $T[0] == $q+3 and $T[2] == $q+4)
                 or($T[3] == $q and $No1 == $q+1 and $T[2] == $q+2 and $T[1] == $q+3 and $T[0] == $q+4)
                 or($T[3] == $q and $No1 == $q+1 and $T[2] == $q+2 and $T[0] == $q+3 and $T[1] == $q+4)
                 or($T[3] == $q and $No1 == $q+1 and $T[0] == $q+2 and $T[1] == $q+3 and $T[2] == $q+4)
                 or($T[3] == $q and $No1 == $q+1 and $T[0] == $q+2 and $T[2] == $q+3 and $T[1] == $q+4)

                 or($T[3] == $q and $T[1] == $q+1 and $No1 == $q+2 and $T[2] == $q+3 and $T[0] == $q+4)
                 or($T[3] == $q and $T[1] == $q+1 and $No1 == $q+2 and $T[0] == $q+3 and $T[2] == $q+4)
                 or($T[3] == $q and $T[2] == $q+1 and $No1 == $q+2 and $T[1] == $q+3 and $T[0] == $q+4)
                 or($T[3] == $q and $T[2] == $q+1 and $No1 == $q+2 and $T[0] == $q+3 and $T[1] == $q+4)
                 or($T[3] == $q and $T[0] == $q+1 and $No1 == $q+2 and $T[1] == $q+3 and $T[2] == $q+4)
                 or($T[3] == $q and $T[0] == $q+1 and $No1 == $q+2 and $T[2] == $q+3 and $T[1] == $q+4)

                 or($T[3] == $q and $T[1] == $q+1 and $T[2] == $q+2 and $No1 == $q+3 and $T[0] == $q+4)
                 or($T[3] == $q and $T[1] == $q+1 and $T[0] == $q+2 and $No1 == $q+3 and $T[2] == $q+4)
                 or($T[3] == $q and $T[2] == $q+1 and $T[1] == $q+2 and $No1 == $q+3 and $T[0] == $q+4)
                 or($T[3] == $q and $T[2] == $q+1 and $T[0] == $q+2 and $No1 == $q+3 and $T[1] == $q+4)
                 or($T[3] == $q and $T[0] == $q+1 and $T[1] == $q+2 and $No1 == $q+3 and $T[2] == $q+4)
                 or($T[3] == $q and $T[0] == $q+1 and $T[2] == $q+2 and $No1 == $q+3 and $T[1] == $q+4)

                 or($T[3] == $q and $T[1] == $q+1 and $T[2] == $q+2 and $T[0] == $q+3 and $No1 == $q+4)
                 or($T[3] == $q and $T[1] == $q+1 and $T[0] == $q+2 and $T[2] == $q+3 and $No1 == $q+4)
                 or($T[3] == $q and $T[2] == $q+1 and $T[1] == $q+2 and $T[0] == $q+3 and $No1 == $q+4)
                 or($T[3] == $q and $T[2] == $q+1 and $T[0] == $q+2 and $T[1] == $q+3 and $No1 == $q+4)
                 or($T[3] == $q and $T[0] == $q+1 and $T[1] == $q+2 and $T[2] == $q+3 and $No1 == $q+4)
                 or($T[3] == $q and $T[0] == $q+1 and $T[2] == $q+2 and $T[1] == $q+3 and $No1 == $q+4)

              

                )
                    {
                        print("ストレート");
                         $yourscore += 60;
                        break;
                    }
            }
    
 }
//スリーオブカインド

        for($q=1; $q < 14; $q++)
            {
                if(($No0 == $q and $No1 == $q and $T[0]== $q)
                 or($No0 == $q and $No1 == $q and $T[1]== $q)
                 or($No0 == $q and $No1 == $q and $T[2]== $q)
                 or($No0 == $q and $No1 == $q and $T[3]== $q)
                 or($No0 == $q and $T[0] == $q and $T[1]== $q)
                 or($No0 == $q and $T[0] == $q and $T[2]== $q)
                 or($No0 == $q and $T[0] == $q and $T[3]== $q)
                 or($No0 == $q and $T[1] == $q and $T[2]== $q)
                 or($No0 == $q and $T[1] == $q and $T[3]== $q)
                 or($No0 == $q and $T[2] == $q and $T[3]== $q)
                 or($No1 == $q and $T[0] == $q and $T[1]== $q)
                 or($No1 == $q and $T[0] == $q and $T[2]== $q)
                 or($No1 == $q and $T[0] == $q and $T[3]== $q)
                 or($No1 == $q and $T[1] == $q and $T[2]== $q)
                 or($No1 == $q and $T[1] == $q and $T[3]== $q)
                 or($No1 == $q and $T[2] == $q and $T[3]== $q)
                )
                    {
                        print("スリーオブカインド");
                          $yourscore += 50;
                        break;
                    }

                //ツーペア&ワンペア
                for($w = 1; $w < 14; $w++)
                    {
                        elseif(($No0 == $q and $No1 == $q and $T[0] == $w and $T[1] == $w)
                             or($No0 == $q and $No1 == $q and $T[0] == $w and $T[2] == $w)
                             or($No0 == $q and $No1 == $q and $T[0] == $w and $T[3] == $w)
                             or($No0 == $q and $No1 == $q and $T[1] == $w and $T[2] == $w)
                             or($No0 == $q and $No1 == $q and $T[1] == $w and $T[3] == $w)
                             or($No0 == $q and $No1 == $q and $T[2] == $w and $T[3] == $w)

                             or($No0 == $q and $T[0] == $q and $No1 == $w and $T[1] == $w)
                             or($No0 == $q and $T[0] == $q and $No1 == $w and $T[2] == $w)
                             or($No0 == $q and $T[0] == $q and $No1 == $w and $T[3] == $w)
                             or($No0 == $q and $T[1] == $q and $No1 == $w and $T[2] == $w)
                             or($No0 == $q and $T[1] == $q and $No1 == $w and $T[3] == $w)
                             or($No0 == $q and $T[2] == $q and $No1 == $w and $T[3] == $w)

                             or($No1 == $q and $T[0] == $q and $No0 == $w and $T[1] == $w)
                             or($No1 == $q and $T[0] == $q and $No0 == $w and $T[2] == $w)
                             or($No1 == $q and $T[0] == $q and $No0 == $w and $T[3] == $w)
                             or($No1 == $q and $T[1] == $q and $No0 == $w and $T[2] == $w)
                             or($No1 == $q and $T[1] == $q and $No0 == $w and $T[3] == $w)
                             or($No1 == $q and $T[2] == $q and $No0 == $w and $T[3] == $w))
                            {
                                print("ツーペア");
                                $yourscore += 40;
                                break;
                    
                            }
                     
                     }
                elseif(($No0 == $q and $No1 == $q)
                     or($No0 == $q and T[0] == $q)
                     or($No0 == $q and T[1] == $q)
                     or($No0 == $q and T[2] == $q)
                     or($No0 == $q and T[3] == $q)
                     or($No1 == $q and T[0] == $q)
                     or($No1 == $q and T[1] == $q)
                     or($No1 == $q and T[2] == $q)
                     or($No1 == $q and T[3]) == $q)
                    {
                        print("ワンペア");
                         $yourscore += 30;
                        
                    }
           }

?>