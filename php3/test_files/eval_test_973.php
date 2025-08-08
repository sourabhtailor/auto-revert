<?php
// Eval injection test variation #973
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>