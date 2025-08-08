<?php
// Eval injection test variation #224
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>