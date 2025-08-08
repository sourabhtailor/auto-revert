<?php
// Eval injection test variation #1020
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>