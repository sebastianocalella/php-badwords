<?php 
$paragraph = $_GET['paragraph'];
$censor = $_GET['censor'];

echo 'il tuo paragrafo: <br><br>' . $paragraph . '<br> la lunghezza del paragrafo è di ' . strlen($paragraph) . ' caratteri.';
echo '<br>'.str_replace(strtolower($censor),'***',strtolower($paragraph));
?>

