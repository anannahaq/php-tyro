<?php
$STRING1 = 'ababcd';
$needle   = 'aB';
$pos      = strripos($STRING1, $needle);
if ($pos === false) {
    echo "Sorry, we did not find ($needle) in ($STRING1)";
} else {
    echo "Congratulations!\n";
    echo "We found the last ($needle) in ($STRING1) at position ($pos)";
}
?>


