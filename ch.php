<?php
function isBalanced($a){
$a  = array_map('intval', str_split($a));
$var1=0;
$var2=0;
    if (count($a)%2==0){
        for($i=0;$i<=(count($a)/2)-2;$i++){
            $var1=$var1+$a[$i];
        }
        for($i=(count($a)/2)+2;$i<=count($a);$i++){
            $var2=$var2+$a[$i-1];
        }
    }
    else{
        $b=count($a)/2;
        $b=(int)$b;
        for($i=0;$i<=$b-1;$i++){
            $var1=$var1+$a[$i];
        }
        for($i=($b+2);$i<=count($a);$i++){
            $var2=$var2+$a[$i-1];
        }
    }

    if ($var1==$var2){
        echo "True";
    }
    else{
        echo "False";
    }
}
isBalanced(205811);
?>