<?php
// Eval injection test variation #576
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>