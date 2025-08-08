<?php
// Eval injection test variation #541
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>