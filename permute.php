<?php


 
	function permute($a){
	    $result=[];
	    
	    if(count($a)==0){
	        return [];
	    }
	    if(count($a)==1){
	        return [$a];
	    }
	    
	    for($i=0; $i<count($a); $i++){
	        $n = $a[$i];
	        
	        $rest=[];
	        for($j=0; $j<count($a); $j++){
	            //echo "j: $j --";
	            if($j!=$i){
	                $rest[] = $a[$j];
	            }
	        }
	        
	        $rest_permute = permute($rest);
	        
	        //GF::dump($rest_permute);
	        //GF::dump([$i, $n, $rest, $rest_permute]);
	        
	        foreach($rest_permute as $v){
	            $t=[];
	            $t[] = $n;
	            foreach($v as $item){
	                //GF::dump($rest_permute);
	                $t[] = $item;
	            }
	            
	            $result[] = $t;
	            
	            
	        }
	        
	    }
	    return $result;
	    
	}


	function permute2($a){
	    $result=[];
	    
	    if(count($a)==0){
	        return [];
	    }
	    if(count($a)==1){
	        return [$a];
	    }
	    
	    $last=null;
	    for($i=0; $i<count($a); $i++){
	        $n = $a[$i];
	        
	        if($n==$last){
	            continue;
	        }
	        
	        $rest=[];
	        for($j=0; $j<count($a); $j++){
	            //echo "j: $j --";
	            if($j!=$i){
	                $rest[] = $a[$j];
	            }
	        }
	        
	        $rest_permute = permute2($rest);
	        
	        //GF::dump($rest_permute);
	        //GF::dump([$i, $n, $rest, $rest_permute]);
	        
	        foreach($rest_permute as $v){
	            $t=[];
	            $t[] = $n;
	            foreach($v as $item){
	                //GF::dump($rest_permute);
	                $t[] = $item;
	            }
	            
	            $result[] = $t;
	            
	            
	        }
	        
	        $last = $n;
	        
	    }
	    return $result;
	    
	}