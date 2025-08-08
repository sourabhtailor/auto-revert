<?php
// Eval injection test variation #1184
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>