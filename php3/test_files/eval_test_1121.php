<?php
// Eval injection test variation #1121
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>