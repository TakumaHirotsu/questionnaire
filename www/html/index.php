<?php
/**
 * Created by IntelliJ IDEA.
 * User: takuma
 * Date: 2019-04-16
 * Time: 14:42
 */

//require_once(__DIR__ . '/functions.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Infomative Sentence System Questionnaire</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" >
</head>
<body>
<header>
    <h1>Infomative Statement System Questionnaire</h1>
</header>
<main>
    <div class="base_size center bold">アンケートに関する注意</div>
    <div class="base_size center">アンケートの所要時間は<span class="bold red">30分</span>です。</div>
    <div class="base_size center">リロードすると初期化されるので注意してください。</div>
    <div class="base_size center">セッション管理等はしてないので、途中でブラウザを閉じると途中結果まで保存されてないですm(_ _)m</div>

    <form id="form_name" action="card.php" method="post" style="margin-top:30px;">
        <div class="center">
            名前:
            <input type="text" name="name" size="30" maxlength="30" value="" placeholder="your name">&nbsp;
            <button type="submit">アンケートを始める</button>
        </div>
    </form>

</main>
<footer>
    <h2>© 2019 Infomative Statement System Questionnaire</h2>
</footer>
</body>
</html>
