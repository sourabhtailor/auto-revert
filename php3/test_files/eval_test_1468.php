<?php
// Eval injection test variation #1468
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>