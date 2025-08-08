<?php
// Eval injection test variation #815
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>