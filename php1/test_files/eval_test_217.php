<?php
// Eval injection test variation #217
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>