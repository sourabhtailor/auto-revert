<?php
// Eval injection test variation #357
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>