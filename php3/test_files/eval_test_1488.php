<?php
// Eval injection test variation #1488
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>