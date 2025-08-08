<?php
// Eval injection test variation #1000
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>