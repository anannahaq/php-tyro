<?php
$link = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $link; // output:    &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;
?>



