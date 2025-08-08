<?php
// Eval injection test variation #1050
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>