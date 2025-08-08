<?php
// Eval injection test variation #1444
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>