<?php
// Eval injection test variation #559
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>