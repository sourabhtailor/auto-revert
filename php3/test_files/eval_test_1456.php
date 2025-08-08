<?php
// Eval injection test variation #1456
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>