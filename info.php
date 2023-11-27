<?php
$text = $_GET["testo"];
$word = $_GET["parola"];
strlen($text);
?>

<header>
    <p class="fs-2">
        <?php echo $text ?>
    </p>
    <p class="fs-2">
        <?php echo $word ?>
    </p>
</header>