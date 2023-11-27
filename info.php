<?php
$text = $_GET["testo"];
$word = $_GET["parola"];
strlen($text);
str_replace($word, "###", $text);
strlen(str_replace($word, "###", $text));
?>


<p class="fs-2">
    <?php echo $text . "," . " " . " lunghezza stringa:" . strlen($text) ?>
</p>
<p class="fs-2">
    <?php echo $word ?>
</p>
<p class="fs-2">
    <?php echo str_replace($word, "###", $text) ?>
</p>
<p class="fs-2">
    <?php echo "Nuova lunghezza stringa:" . strlen(str_replace($word, "###", $text)) ?>
</p>