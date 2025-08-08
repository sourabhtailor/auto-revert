<?php
// Eval injection test variation #895
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>