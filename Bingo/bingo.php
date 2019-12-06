<html>
    <head>
        <link rel="stylesheet" href="css/index1.css">
        <title>
         inzendopdracht 051R3   
        </title>
    </head>
    <body>
    <h1> Bingo!</h1>
      <?php
      
      
      function myRandom () {
        
        mt_srand((double)microtime() * 1000000);
        $myArray = array(mt_rand(10, 19), mt_rand(10, 19), mt_rand(10, 19), mt_rand(10, 19), mt_rand(10, 19), mt_rand(10, 19));             
        sort($myArray);
        $result = array_unique($myArray);
        $lengte = count($result);
       
        while($lengte < 6) {
            mt_srand((double)microtime() * 1000000);
            $myArray = array(mt_rand(10, 19), mt_rand(10, 19), mt_rand(10, 19), mt_rand(10, 19), mt_rand(10, 19), mt_rand(10, 19));             
            sort($myArray);
            $result = array_unique($myArray);
            $lengte = count($result);
            
        };
        
    
       mt_srand((double)microtime() * 1000000);
        $myArray1 = array(mt_rand(20, 29), mt_rand(20, 29), mt_rand(20, 29), mt_rand(20, 29), mt_rand(20, 29), mt_rand(20, 29));            
        sort($myArray1);
        $result1 = array_unique($myArray1);
        $lengte1 = count($result1);
        
        while($lengte1 < 6) {
            mt_srand((double)microtime() * 1000000);
            $myArray1 = array(mt_rand(20, 29), mt_rand(20, 29), mt_rand(20, 29), mt_rand(20, 29), mt_rand(20, 29), mt_rand(20, 29));             
            sort($myArray1);
            $result1 = array_unique($myArray1);
            $lengte1 = count($result1);
        };
        
    
        mt_srand((double)microtime() * 1000000);
        $myArray2 = array(mt_rand(30, 39), mt_rand(30, 39), mt_rand(30, 39), mt_rand(30, 39), mt_rand(30, 39), mt_rand(30, 39));             
        sort($myArray2);
        $result2 = array_unique($myArray2);
        $lengte2 = count($result2);
        while($lengte2 < 6) {
            mt_srand((double)microtime() * 1000000);
            $myArray2 = array(mt_rand(30, 39), mt_rand(30, 39), mt_rand(30, 39), mt_rand(30, 39), mt_rand(30, 39), mt_rand(30, 39));            
            sort($myArray2);
            $result2 = array_unique($myArray2);
            $lengte2 = count($result2);
        };
       
    
        mt_srand((double)microtime() * 1000000);
        $myArray3 = array(mt_rand(40, 49), mt_rand(40, 49), mt_rand(40, 49), mt_rand(40, 49), mt_rand(40, 49), mt_rand(40, 49));             
        sort($myArray3);
        $result3 = array_unique($myArray3);
        $lengte3 = count($result3);
        while($lengte3 < 6) {
            mt_srand((double)microtime() * 1000000);
            $myArray3 = array(mt_rand(40, 49), mt_rand(40, 49), mt_rand(40, 49), mt_rand(40, 49), mt_rand(40, 49), mt_rand(40, 49));              
            sort($myArray3);
            $result3 = array_unique($myArray3);
            $lengte3 = count($result3);
        };
        
    
        mt_srand((double)microtime() * 1000000);
        $myArray4 = array(mt_rand(50, 59), mt_rand(50, 59), mt_rand(50, 59), mt_rand(50, 59), mt_rand(50, 59), mt_rand(50, 59));             
        sort($myArray4);
        $result4 = array_unique($myArray4);
        $lengte4 = count($result4);
        while($lengte4 < 6) {
            mt_srand((double)microtime() * 1000000);
            $myArray4 = array(mt_rand(50, 59), mt_rand(50, 59), mt_rand(50, 59), mt_rand(50, 59), mt_rand(50, 59), mt_rand(50, 59));                
            sort($myArray4);
            $result4 = array_unique($myArray4);
            $lengte4 = count($result4);
        };
        mt_srand((double)microtime() * 1000000);
        $myArray5 = array(mt_rand(60, 69), mt_rand(60, 69), mt_rand(60, 69), mt_rand(60, 69), mt_rand(60, 69), mt_rand(60, 69));             
        sort($myArray5);
        $result5 = array_unique($myArray5);
        $lengte5 = count($result5);
        while($lengte5 < 6) {
            mt_srand((double)microtime() * 1000000);
            $myArray5 = array(mt_rand(60, 69), mt_rand(60, 69), mt_rand(60, 69), mt_rand(60, 69), mt_rand(60, 69), mt_rand(60, 69));             
            sort($myArray5);
            $result5 = array_unique($myArray5);
            $lengte5 = count($result5);
        };
        $bigArray = array_merge($myArray, $myArray1, $myArray2, $myArray3, $myArray4, $myArray5);
        return $bigArray;
      };
     
     
     
     
        function afdrukken() {
        $r1 = 0;
        $r2 = 0;
        $r3 = 0;
        $r4 = 0;
        $r5 = 0;
        $r6 = 0;
        $k1 = 0;
        $k2 = 0;
        $k3 = 0;
        $k4 = 0;
        $k5 = 0;
        $k6 = 0;
        
       $bigArray = myRandom();
      
       $rij1 = array($bigArray[0], $bigArray[1], $bigArray[2], $bigArray[3], $bigArray[4], $bigArray[5]);
       $rij2 = array($bigArray[6], $bigArray[7], $bigArray[8], $bigArray[9], $bigArray[10], $bigArray[11]);
       $rij3 = array($bigArray[12], $bigArray[13], $bigArray[14], $bigArray[15], $bigArray[16], $bigArray[17]);
       $rij4 = array($bigArray[18], $bigArray[19], $bigArray[20], $bigArray[21], $bigArray[22], $bigArray[23]);
       $rij5 = array($bigArray[24], $bigArray[25], $bigArray[26], $bigArray[27], $bigArray[28], $bigArray[29]);
       $rij6 = array($bigArray[30], $bigArray[31], $bigArray[32], $bigArray[33], $bigArray[34], $bigArray[35]);
       $kolom1 = array($bigArray[0], $bigArray[6], $bigArray[12], $bigArray[18], $bigArray[24], $bigArray[30]);
       $kolom2 = array($bigArray[1], $bigArray[7], $bigArray[13], $bigArray[19], $bigArray[25], $bigArray[31]);
       $kolom3 = array($bigArray[2], $bigArray[8], $bigArray[14], $bigArray[20], $bigArray[26], $bigArray[32]);
       $kolom4 = array($bigArray[3], $bigArray[9], $bigArray[15], $bigArray[21], $bigArray[27], $bigArray[33]);
       $kolom5 = array($bigArray[4], $bigArray[10], $bigArray[16], $bigArray[22], $bigArray[28], $bigArray[34]);
       $kolom6 = array($bigArray[5], $bigArray[11], $bigArray[17], $bigArray[23], $bigArray[29], $bigArray[35]);
       
        $afgestreept = array();
       $extra = array();
       
       
           
       while(($r1 < 6) && ($r2 < 6 ) && ($r3 < 6) && ($r4 < 6) && ($r5 < 6) && ($r6 < 6) && ($k1 < 6) && ($k2 < 6) && ($k3 < 6) && ($k4 < 6) && ($k5 < 6) && ($k6 < 6)){
        mt_srand((double)microtime() * 1000000); 
        $nummer = mt_rand(10, 69);
            
            if(in_array($nummer, $afgestreept)){
                array_push($extra, $nummer);
            }
            
            elseif(in_array($nummer, $rij1)){
             array_push($afgestreept, $nummer);
             $r1++;
              if(in_array($nummer, $kolom1)){
                $k1++;
              }
              elseif(in_array($nummer, $kolom2)){
                $k2++;
              }
              elseif(in_array($nummer, $kolom3)){
                $k3++;
              }
              elseif(in_array($nummer, $kolom4)){
                $k4++;
              }
              elseif(in_array($nummer, $kolom5)){
                $k5++;
              }
              elseif(in_array($nummer, $kolom6)){
                $k6++;
              }
              
            }
            elseif(in_array($nummer, $rij2)){
             array_push($afgestreept, $nummer);
             $r2++;
             if(in_array($nummer, $kolom1)){
                $k1++;
              }
              elseif(in_array($nummer, $kolom2)){
                $k2++;
              }
              elseif(in_array($nummer, $kolom3)){
                $k3++;
              }
              elseif(in_array($nummer, $kolom4)){
                $k4++;
              }
              elseif(in_array($nummer, $kolom5)){
                $k5++;
              }
              elseif(in_array($nummer, $kolom6)){
                $k6++;
              }
            }
            elseif(in_array($nummer, $rij3)){
             array_push($afgestreept, $nummer);
             $r3++;
             if(in_array($nummer, $kolom1)){
                $k1++;
              }
              elseif(in_array($nummer, $kolom2)){
                $k2++;
              }
              elseif(in_array($nummer, $kolom3)){
                $k3++;
              }
              elseif(in_array($nummer, $kolom4)){
                $k4++;
              }
              elseif(in_array($nummer, $kolom5)){
                $k5++;
              }
              elseif(in_array($nummer, $kolom6)){
                $k6++;
              }
            }
            elseif(in_array($nummer, $rij4)){
             array_push($afgestreept, $nummer);
             $r4++;
             if(in_array($nummer, $kolom1)){
                $k1++;
              }
              elseif(in_array($nummer, $kolom2)){
                $k2++;
              }
              elseif(in_array($nummer, $kolom3)){
                $k3++;
              }
              elseif(in_array($nummer, $kolom4)){
                $k4++;
              }
              elseif(in_array($nummer, $kolom5)){
                $k5++;
              }
              elseif(in_array($nummer, $kolom6)){
                $k6++;
              }
            }
            elseif(in_array($nummer, $rij5)){
             array_push($afgestreept, $nummer);
             $r5++;
             if(in_array($nummer, $kolom1)){
                $k1++;
              }
              elseif(in_array($nummer, $kolom2)){
                $k2++;
              }
              elseif(in_array($nummer, $kolom3)){
                $k3++;
              }
              elseif(in_array($nummer, $kolom4)){
                $k4++;
              }
              elseif(in_array($nummer, $kolom5)){
                $k5++;
              }
              elseif(in_array($nummer, $kolom6)){
                $k6++;
              }
            }
            elseif(in_array($nummer, $rij6)){
             array_push($afgestreept, $nummer);
             $r6++;
             if(in_array($nummer, $kolom1)){
                $k1++;
              }
              elseif(in_array($nummer, $kolom2)){
                $k2++;
              }
              elseif(in_array($nummer, $kolom3)){
                $k3++;
              }
              elseif(in_array($nummer, $kolom4)){
                $k4++;
              }
              elseif(in_array($nummer, $kolom5)){
                $k5++;
              }
              elseif(in_array($nummer, $kolom6)){
                $k6++;
              }
            }
           else {
             array_push($afgestreept, $nummer);
            }
       }
       if($r1 == 6){
        print("<style>.A {background-color: green;} </style>");
       }
       elseif($r2 == 6){
        print("<style>.B {background-color: green;} </style>");
       }
        elseif($r3 == 6){
        print("<style>.C {background-color: green;} </style>");
       }
        elseif($r4 == 6){
        print("<style>.D {background-color: green;} </style>");
       }
        elseif($r5 == 6){
        print("<style>.E {background-color: green;} </style>");
       }
        elseif($r6 == 6){
        print("<style>.F {background-color: green;} </style>");
       }
        elseif($k1 == 6){
        print("<style>.A1 {background-color: green;} </style>");
       }
       elseif($k2 == 6){
        print("<style>.A2 {background-color: green;} </style>");
       }
      elseif($k3 == 6){
        print("<style>.A3 {background-color: green;} </style>");
       }
       elseif($k4 == 6){
        print("<style>.A4 {background-color: green;} </style>");
       }
       elseif($k5 == 6){
        print("<style>.A5 {background-color: green;} </style>");
       }
      elseif($k6 == 6){
        print("<style>.A6 {background-color: green;} </style>");
       }
        echo("<table>
        <tr class='A'>
            <td class='A1'>" . "<div class='nummer'>" . $bigArray[0] . "</div> </td>
            <td class='A2'>" . "<div class='nummer'>" . $bigArray[1] . "</div> </td>
            <td class='A3'>" . "<div class='nummer'>" . $bigArray[2] . "</div> </td>
            <td class='A4'>" . "<div class='nummer'>" . $bigArray[3] . "</div> </td>
            <td class='A5'>" . "<div class='nummer'>" . $bigArray[4] . "</div> </td>
            <td class='A6'>" . "<div class='nummer'>" . $bigArray[5] . "</div> </td>
            
        </tr>
        <tr class='B'>
            <td class='A1'>" . "<div class='nummer'>" . $bigArray[6] . "</div> </td>
            <td class='A2'>" . "<div class='nummer'>" . $bigArray[7] . "</div> </td>
            <td class='A3'>" . "<div class='nummer'>" . $bigArray[8] . "</div> </td>
            <td class='A4'>" . "<div class='nummer'>" . $bigArray[9] . "</div> </td>
            <td class='A5'>" . "<div class='nummer'>" . $bigArray[10] . "</div> </td>
            <td class='A6'>" . "<div class='nummer'>" . $bigArray[11] . "</div> </td>
            
        </tr>
        </tr>
        <tr class='C'>
            <td class='A1'>" . "<div class='nummer'>" . $bigArray[12] . "</div> </td>
            <td class='A2'>" . "<div class='nummer'>" . $bigArray[13] . "</div> </td>
            <td class='A3'>" . "<div class='nummer'>" . $bigArray[14] . "</div> </td>
            <td class='A4'>" . "<div class='nummer'>" . $bigArray[15] . "</div> </td>
            <td class='A5'>" . "<div class='nummer'>" . $bigArray[16] . "</div> </td>
            <td class='A6'>" . "<div class='nummer'>" . $bigArray[17] . "</div> </td>
            
        </tr>
        <tr class='D'>
            <td class='A1'>" . "<div class='nummer'>" . $bigArray[18] . "</div> </td>
            <td class='A2'>" . "<div class='nummer'>" . $bigArray[19] . "</div> </td>
            <td class='A3'>" . "<div class='nummer'>" . $bigArray[20] . "</div> </td>
            <td class='A4'>" . "<div class='nummer'>" . $bigArray[21] . "</div> </td>
            <td class='A5'>" . "<div class='nummer'>" . $bigArray[22] . "</div> </td>
            <td class='A6'>" . "<div class='nummer'>" . $bigArray[23] . "</div> </td>
            
        </tr>
        <tr class='E'>
            <td class='A1'>" . "<div class='nummer'>" . $bigArray[24] . "</div> </td>
            <td class='A2'>" . "<div class='nummer'>" . $bigArray[25] . "</div> </td>
            <td class='A3'>" . "<div class='nummer'>" . $bigArray[26] . "</div> </td>
            <td class='A4'>" . "<div class='nummer'>" . $bigArray[27] . "</div> </td>
            <td class='A5'>" . "<div class='nummer'>" . $bigArray[28] . "</div> </td>
            <td class='A6'>" . "<div class='nummer'>" . $bigArray[29] . "</div> </td>
            
        </tr>
        <tr class='F'>
            <td class='A1'>" . "<div class='nummer'>" . $bigArray[30] . "</div> </td>
            <td class='A2'>" . "<div class='nummer'>" . $bigArray[31] . "</div> </td>
            <td class='A3'>" . "<div class='nummer'>" . $bigArray[32] . "</div> </td>
            <td class='A4'>" . "<div class='nummer'>" . $bigArray[33] . "</div> </td>
            <td class='A5'>" . "<div class='nummer'>" . $bigArray[34] . "</div> </td>
            <td class='A6'>" . "<div class='nummer'>" . $bigArray[35] . "</div> </td>
            
        </tr>
      </table> <br>");
      
      $hoeveel = count($afgestreept);  
      print("<p>Deze getallen zijn getrokken:</p> <br>");
      foreach($afgestreept as $name_value){
        print($name_value . " ");
            
      }
      print("<p>Het aantal getrokken getallen: <br>" . $hoeveel . "</p>");
     
        }
     
     
        
        afdrukken();
       
             
        
      ?>
    
    </body>
</html>