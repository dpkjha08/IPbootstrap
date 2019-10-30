<?php
function check($a){
    if(($a>=4 && $a<=20) || $a%10==0){
        $a=(int)$a;
        echo $a."th";
    }
    else{
        $b=$a%10;
        if($b==1){
            $a=(int)$a;
        echo $a."st";
        }
        else if($b==2){
            $a=(int)$a;
        echo $a."nd";
        }
        else if($b==3){
            $a=(int)$a;
        echo $a."rd";
        }
        else{
            $a=(int)$a;
        echo $a."th";
        }
    }
}
check(205);
?>

