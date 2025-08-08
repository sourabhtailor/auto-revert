<?php
// Eval injection test variation #436
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>