<?php
/**
 * Created by IntelliJ IDEA.
 * User: takuma
 * Date: 2019-04-17
 * Time: 17:48
 */

function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}


function get_csv($csvfile, $mode="sjis") {
    // ファイル存在確認
    if(!file_exists($csvfile)) return false;

    // 文字コードを変換しながら読み込めるようにPHPフィルタを定義
    if($mode === 'sjis') $filter = 'php://filter/read=convert.iconv.cp932%2Futf-8/resource='.$csvfile;
    else if($mode === 'utf16') $filter = 'php://filter/read=convert.iconv.utf-16%2Futf-8/resource='.$csvfile;
else if($mode === 'utf8') $filter = $csvfile;

    // SplFileObject()を使用してCSVロード
    $file = new SplFileObject($filter);

    if($mode === 'utf16') $file->setCsvControl("\t");
    $file->setFlags(
        SplFileObject::READ_CSV |
        SplFileObject::SKIP_EMPTY |
        SplFileObject::READ_AHEAD
    );
    // 各行を処理
    $records = array();
    foreach ($file as $i => $row) {
        // 1行目はキーヘッダ行として取り込み
        if($i===0) {
            foreach($row as $j => $col) $colbook[$j] = $col;
            continue;
        }
        // 2行目以降はデータ行として取り込み
        $line = array();
        foreach($colbook as $j=>$col) $line[$colbook[$j]] = @$row[$j];
        $records[] = $line;
    }
    return $records;
}



