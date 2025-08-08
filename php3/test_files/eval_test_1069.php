<?php
// Eval injection test variation #1069
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>