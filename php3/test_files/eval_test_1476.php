<?php
// Eval injection test variation #1476
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>