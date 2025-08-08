<?php
// Eval injection test variation #301
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>