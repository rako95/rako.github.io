<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>もうちょっと頑張る？</title>
</head>


<body>

    <?php

    $image_rand = array(
        "neta.jpg",
        "アイアンマン３_アートボード 1.jpg",
        "ニック1_アートボード 1.jpg",
    );

    $image_rand = $image_rand[mt_rand(0, count($image_rand)-1)];
    echo '<img src="'.$image_rand.'" alt="">';


    ?>


</body>
