<?php
// Eval injection test variation #1404
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>