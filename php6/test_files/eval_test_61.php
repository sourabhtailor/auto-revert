<?php
// Eval injection test variation #61
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>