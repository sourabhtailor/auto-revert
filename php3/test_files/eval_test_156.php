<?php
// Eval injection test variation #156
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>