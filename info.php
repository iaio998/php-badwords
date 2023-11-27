<?php
$text = $_GET["testo"];
$word = $_GET["parola"];
$textlen = strlen($text);
$replacestring = str_replace($word, "###", $text);
$replacelen = strlen($replacestring);
$array = explode(" ", $text);
$arraylen = count($array);
?>



<p class="fs-2">
    <?php echo $text . "," . " " . " lunghezza stringa:" . $textlen ?>
</p>
<h5 class="fs-2">
    <?php echo "Lunghezza caratteri: " . $textlen ?>
    <?php echo "Totale parole: " . $arraylen ?>
</h5>
<p class="fs-2">
    <?php echo $replacestring ?>
</p>
<p class="fs-2">
    <?php echo "Nuova lunghezza stringa: " . $replacelen ?>
</p>