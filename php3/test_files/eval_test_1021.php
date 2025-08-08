<?php
// Eval injection test variation #1021
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>