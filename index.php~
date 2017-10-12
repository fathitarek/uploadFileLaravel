<?php

function firstDuplicate($a) {
       $control = false;
    $result=array();
    ksort($a);
    foreach ($a as $key => $value) {
        unset($a[$key]);
        $control = array_search($value, $a);
        if (array_search($value, $a)){
            //return $value;
            array_push($result,$value);
        }
    }
    if($result){
       return end($result); 
    }else{
    return -1;
    }
}
?>
