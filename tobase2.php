 

function toBase2($n){
    $s = '';
    for($i=$n; $i; $i=floor($i/2)){
        if($i%2==1){
            $s = 1 . $s;
        }
        else{
            $s = 0 . $s;
        }
        
    }
    return $s;
}