<?php
// Eval injection test variation #1416
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>