<?php
// Eval injection test variation #438
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>