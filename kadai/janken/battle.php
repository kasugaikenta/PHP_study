<?php
/**
(1) 勝敗（勝ち・負け・あいこ）は$resultに代入してください
(2) プレイヤーの手は$player_handに代入してください
(3) コンピューターの手は$pc_handに代入してください
**/

//プレイヤーの手を受け取り、表示
$player_hand = $_POST['playerHand'];
if ($player_hand == 0){
    $player_hand_display = "ぐー";
}
else if ($player_hand == 1){
    $player_hand_display = "ちょき";
}
else if ($player_hand == 2){
    $player_hand_display = "ぱー";
}

//CPの手を生成し、表示
$min = 0;
$max = 2;
$pc_hand = mt_rand($min, $max);
if ($pc_hand === 0){
    $pc_hand_display = "ぐー";
}
else if ($pc_hand === 1){
    $pc_hand_display = "ちょき";
}
else if ($pc_hand === 2){
    $pc_hand_display = "ぱー";
}

//勝敗判定
if ($player_hand == $pc_hand){
    $result = "あいこ";
}
else if (($player_hand == 0 && $pc_hand == 1)||($player_hand == 1 && $pc_hand == 2)||($player_hand == 2 && $pc_hand == 0)){
    $result = "勝ち！";
}
else {
    $result = "負け！";
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>じゃんけん</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>結果は・・・</h1>
        <div class="result-box">
            <!-- じゃんけんの結果を表示しましょう -->
            <?php echo $result;?>
            <p class="result-word"></p>
            <!-- プレイヤーの手を表示しましょう -->
            あなた：<?php echo $player_hand_display;?><br>
            <!-- コンピュータの手を表示しましょう -->
            コンピューター：<?php echo $pc_hand_display;?><br>

            <p><a class="red" href="index.php">>>もう一回勝負する</a></p>
        </div>
    </body>
</html>