<?php
// Eval injection test variation #811
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>