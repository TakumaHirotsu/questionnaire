<?php
/**
 * Created by IntelliJ IDEA.
 * User: takuma
 * Date: 2019-04-17
 * Time: 22:21
 */

require_once(__DIR__ . '/functions.php');
$records = get_csv('output.csv', "utf8");
$records_num = count($records);


if (isset($_POST["row"])) {
    $current_row = $_POST["row"];
    $records_row = $records[$current_row];
    $file_name = $records_row["file_name"];
    $eng_statement = $records_row["eng_statement"];
    $jpn_statement = $records_row["jpn_statement"];
}

?>
<script type="text/javascript" src="./js/functions.js" charset="utf8"></script>
<form id="form-box" method="post" class="center margin-top-30">
    <div class="base_size center bold"><span class="red"><?= h($current_row+1); ?>枚</span>/<?= h($records_num); ?>枚</div>
    <img src="./images/<?= h($file_name); ?>" alt="<?= h($file_name); ?>" title="<?= h($file_name); ?>">
    <div class="base_size inline"><span class="bold">出力:</span>「<?= h($eng_statement); ?>」</div>
    <div class="base_size inline" style="margin-bottom:30px;"><span class="bold">　訳:</span>(<?= h($jpn_statement); ?>)</div>

    <div class="base_size center bold">画像と有益文の出力は、、、</div>
    <div id="check-form">
        <div class="inline hover"><input type="radio" id="radio<?= h($current_row); ?>_1" name="radio<?= h($current_row); ?>" value="1"/><label for="radio<?= h($current_row); ?>_1">対応していない</label></div>
        <div class="inline hover"><input type="radio" id="radio<?= h($current_row); ?>_2" name="radio<?= h($current_row); ?>" value="2"/><label for="radio<?= h($current_row); ?>_2">あまり対応していない</label></div>
        <div class="inline hover"><input type="radio" id="radio<?= h($current_row); ?>_3" name="radio<?= h($current_row); ?>" value="3"/><label for="radio<?= h($current_row); ?>_3">どちらとも言えない</label></div>
        <div class="inline hover"><input type="radio" id="radio<?= h($current_row); ?>_4" name="radio<?= h($current_row); ?>" value="4"/><label for="radio<?= h($current_row); ?>_4">少し対応している</label></div>
        <div class="inline hover"><input type="radio" id="radio<?= h($current_row); ?>_5" name="radio<?= h($current_row); ?>" value="5"/><label for="radio<?= h($current_row); ?>_5">対応している</label></div>
    </div>
    <input type="hidden" name="current-row" value="<?= h($current_row); ?>">
    <input type="hidden" name="records-num" value="<?= h($records_num); ?>">
    <button type="button" id="btn" class="margin-top-30 margin-bottom-30">次の問題へ</button>
</form>
