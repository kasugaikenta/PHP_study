<?php
    function duplication_check($target_array){//重複チェック用関数
        $unique_array = array_unique($target_array);
        if (count($unique_array) === count($target_array)) {
            return true;
        }
        else {
            return false;
        }
    }
    
    //変数定義
    $answer = [];
    $count = 1;
    $check = [];
    $min = 0;
    $max = 9;
    
    for ($i = 1; $i < 4; $i++){
        while(true){
            $value = mt_rand($min, $max);
            
            if (! in_array($value, $answer)){
                array_push($answer, $value);
                break;
            }
        }
    }
    
    while(true){
        $user_answer = 0;
        $digit = 0;
        $hit = 0;
        $blow = 0;
        echo "■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□■□\n";
        echo $count . "回目のチャレンジ！\n";
        echo "3桁の半角数字を重複なしで入力してください：";
        $user_answer = fgets(STDIN);
        
        $digit_check = $user_answer;//桁数カウント
        while(1 <= $digit_check){
            $digit_check /= 10;
            $digit++;
        }
        
        if ($digit === 3){//桁数チェック
            for ($j = 0; $j < 3; $j++){//入力された数値を一桁ずつ配列に格納
                $check[$j] = substr($user_answer,$j,1);
            }
            if(duplication_check($check)){//配列内要素の重複チェック
                for ($k = 0; $k < 3; $k++){
                    if ($answer[$k] == $check[$k]){//Hit数カウント
                        $hit += 1;
                        $hit_index = $k;
                    }
                    for($n = 0; $n < 3; $n++){
                        if ($answer[$n] == $check[$h]){
                            $blow += 1;
                        }
                    }
                }
                
                if($hit == 3){
                    echo "正解です！" . $count . "回目でクリアです！！\n";
                    break;
                }
                /*
                for ($n = 0; $n < 3; $n++){//Blow数カウント
                    for ($h = 0; $h < 3; $h++){
                        if ($answer[$n] == $check[$h]){
                            $blow += 1;
                        }
                    }
                }*/
                
                echo "Hit：" . $hit . " Blow：" . $blow . "です。\n";
                $count++;
            }
            else {
                echo "エラー：3桁の半角数字を重複なしで入力してください！\n";
            }
        }
        
        else{
            echo "エラー：3桁の半角数字を重複なしで入力してください！\n";
        }
    }
?>