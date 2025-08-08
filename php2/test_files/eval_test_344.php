<?php
// Eval injection test variation #344
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>