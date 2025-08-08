<?php
// Eval injection test variation #550
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>