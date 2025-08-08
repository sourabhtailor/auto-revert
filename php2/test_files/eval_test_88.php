<?php
// Eval injection test variation #88
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>