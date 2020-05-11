<?php
    echo "身長を入力してください：";
    $height = fgets(STDIN);
    
    echo "体重を入力してください：";
    $weight = fgets(STDIN);
    
    $height = $height / 100;
    $bmi = $weight / ($height * $height);
    if ($bmi < 18.5){
        echo "あなたは、低体重です。";
    }
    
    else if ($bmi >= 18.5 && $bmi < 25){
        echo "あなたは、普通体重です。";
    }
    else{
        echo "あなたは、肥満です。";
    }
?>