<?php
$start = microtime(true);
echo date("Y-m-d H:i");

echo '<div><pre>Execution time: '.sprintf("%.5f", microtime(true)-$start).'</pre></div>';
