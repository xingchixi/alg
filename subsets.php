<?php

//idea:   star with [],
//each time adding one number
//for that new number,  add one entry  for every entry current we know
//total answer should be 2^n.
//eg:
//step 1;   []
//step 2:   [], [1]
//step 3:   [], [1], [2], [1, 2]  
//step 4:   [], [1], [2], [1, 2], [3], [1, 3], [2, 3], [1, 2, 3] 

function subsets($s){
    $res = [[]];
    foreach($s as  $v){
        $temp = $res;
        foreach($temp as $item){
            $item[] = $v;
            $res[] = $item;
        }
    }
    return $res;
}
 
