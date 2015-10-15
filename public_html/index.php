<?php
$start = microtime(true);
echo date("Y-m-d H:i");

echo '<div><pre>Execution time: '.printf("%.5f", microtime(true)-$start).'</pre></div>';
