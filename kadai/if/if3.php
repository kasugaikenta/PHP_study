<?php
    $temperature = 34.1;
    
    if ($temperature < 37.0){
        echo "平熱です";
    }
    
    else if (37.0 <= $temperature && $temperature < 37.5){
        echo "微熱です";
    }
    
    else if ($temperature >= 37.5){
        echo "コロナの可能性あり";
    }
?>