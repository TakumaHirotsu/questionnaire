<?php
/**
 * Created by IntelliJ IDEA.
 * User: takuma
 * Date: 2019-04-16
 * Time: 18:00
 */

require_once(__DIR__ . '/functions.php');

if (isset($_POST["name"])) {
    $name = $_POST["name"];
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Infomative Sentence System Questionnaire</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css" >
    <script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
</head>
<body>
<header>
    <h1>Infomative Statement System Questionnaire</h1>
</header>
<main>
    <div class="base_size center bold"><?= h($name); ?>さん</div>
    <input type="hidden" name="name" value="<?= h($name); ?>">
    <span id="form"></span>
</main>
<footer>
    <h2>© 2019 Infomative Statement System Questionnaire</h2>
</footer>
<script type="text/javascript" charset="utf8">
    var answer = new Array();
    $("#form").load("card-template.php", {
        row: 0
    }, function() {
        $("#form-box").css({opacity: '0.0'}).animate({opacity: '1'}, 1000)
    });
</script>
</body>
</html>