<?php
// Eval injection test variation #874
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>