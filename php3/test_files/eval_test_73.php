<?php
// Eval injection test variation #73
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>