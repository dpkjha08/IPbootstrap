<?php
function roundhigh($a){
    $b=$a%5;
    if($b==1 || $b==-4){
        $a+=4;
    }
    else if($b==2 || $b==-3){
        $a+=3;
    }
    else if($b==3 || $b==-2){
        $a+=2;
    }
    else if($b==4 || $b==-1){
        $a+=1;
    }
    echo $a;
}
roundhigh(-16);
?>