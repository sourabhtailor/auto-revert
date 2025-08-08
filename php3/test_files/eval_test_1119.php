<?php
// Eval injection test variation #1119
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>