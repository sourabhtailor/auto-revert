<?php
// Eval injection test variation #1448
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>