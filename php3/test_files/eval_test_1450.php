<?php
// Eval injection test variation #1450
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>