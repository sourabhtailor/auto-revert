<?php
// Eval injection test variation #1250
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>