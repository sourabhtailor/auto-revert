<?php
// Eval injection test variation #1254
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>