<?php
// Eval injection test variation #1224
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>