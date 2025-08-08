<?php
// Eval injection test variation #69
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>