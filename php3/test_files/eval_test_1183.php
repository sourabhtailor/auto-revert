<?php
// Eval injection test variation #1183
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>