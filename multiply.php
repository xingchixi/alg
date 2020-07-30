
// mutiply two strings of big integers
function multiply($x, $y){
    $cx = strlen($x);
    $cy = strlen($y);
    
    $z = '';
    for($i=0; $i<$cx+$cy; $i++){
        $z .='0';
    }

    $c = 0;
    for($i=0; $i<=$cx-1; $i++){
        $c = 0;
        $dx =  $x[$cx-1-$i];
        
        for($j=0; $j<=$cy-1; $j++){
            $dy =  $y[$cy-1-$j];
            
            $power = $i+$j;
            $product = $dx*$dy;
            $iz= $cx+$cy-1 - $power;
            $dr = $z[$iz];
            $sum = $product + $dr + $c;
            
            $s_m = $sum % 10;
            $z[$iz] = $s_m;
            $c = ($sum-$s_m) / 10;            
            //echo "$z<br>";                                     
        }
        if($c>0){
            for($k=$cx-$i-1; $k>=0; $k--){
                //echo "dr: $dr,";
                $dr = $z[$k];
                $sum = $dr + $c;
                
                $s_m = $sum % 10;
                $z[$k] = $s_m;
                $c = ($sum-$s_m) / 10;
            }            
            //echo "-- $z<br >";
        }        
    }    
    return $z;        
}