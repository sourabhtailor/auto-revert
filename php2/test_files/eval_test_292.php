<?php
// Eval injection test variation #292
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>