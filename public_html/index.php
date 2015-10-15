<?php
$start = microtime(true);
echo date("Y-m-d H:i");

echo '<div><pre>Execution time: '.(microtime(true)-$start).'</pre></div>';
