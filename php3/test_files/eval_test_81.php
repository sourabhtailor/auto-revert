<?php
// Eval injection test variation #81
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>