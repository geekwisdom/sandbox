<? include ("fortune.php");
$fortune = new Fortune();
$f = $fortune->QuoteFromDir("./files/");
echo $f;
?>