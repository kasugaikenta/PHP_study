<?php
    $count = 1;
    for ($i = 1; $i < 101; $i++){
            if ($i % 3 === 0){
                echo "Fizz ";
            }
            
            else if ($i % 5 === 0){
                echo "Buzz ";
            }
            
            else{
                echo $i . " ";
            }
            if ($count % 10 === 0){
                echo "\n";
            }
            $count += 1;
    }
?>