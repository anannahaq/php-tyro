<?php
$ana = "A 'quote' is <b>bold</b>";
// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities ("$ana");
// echo "<br>";
// echo "<br><br>".$ana;
echo "<br>";
// Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($ana, ENT_QUOTES);
?>