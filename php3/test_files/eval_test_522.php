<?php
// Eval injection test variation #522
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>