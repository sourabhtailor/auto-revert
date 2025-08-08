<?php
// Eval injection test variation #120
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>