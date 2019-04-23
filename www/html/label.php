<?php
/**
 * Created by IntelliJ IDEA.
 * User: takuma
 * Date: 2019-04-22
 * Time: 19:03
 */

$file = "Informative-statement.csv";
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
    <?php if ( ( $handle = fopen ( $file, "r" ) ) !== FALSE ) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>";
        while ( ( $data = fgetcsv ( $handle, 1000, ",", '"' ) ) !== FALSE ) {
        echo "\t<tr>\n";
            for ( $i = 0; $i < count( $data ); $i++ ) {
                echo "\t\t<td>{$data[$i]}</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo "</table>\n";
    fclose ( $handle );
    } ?>
</main>
<footer>
    <h2>© 2019 Infomative Statement System Questionnaire</h2>
</footer>
</body>
</html>