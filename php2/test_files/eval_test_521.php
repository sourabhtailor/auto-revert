<?php
// Eval injection test variation #521
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>