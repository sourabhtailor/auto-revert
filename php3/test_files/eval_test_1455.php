<?php
// Eval injection test variation #1455
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>