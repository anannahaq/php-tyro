<?php
$demo = "I'll \"walk\" the <b>dog</b> now";

$a = htmlentities($demo);

$b = html_entity_decode($a);

echo $a; // Output:     I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now

echo $b; // Output:     I'll "walk" the <b>dog</b> now
?>



