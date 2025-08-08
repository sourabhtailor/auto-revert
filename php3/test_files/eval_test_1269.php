<?php
// Eval injection test variation #1269
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>