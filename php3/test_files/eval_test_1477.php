<?php
// Eval injection test variation #1477
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>