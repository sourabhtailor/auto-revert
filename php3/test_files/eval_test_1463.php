<?php
// Eval injection test variation #1463
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>