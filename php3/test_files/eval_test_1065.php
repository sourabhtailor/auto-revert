<?php
// Eval injection test variation #1065
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>