<?php
// Eval injection test variation #50
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>