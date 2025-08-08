<?php
// Eval injection test variation #185
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>