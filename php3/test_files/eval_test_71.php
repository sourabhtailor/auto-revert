<?php
// Eval injection test variation #71
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>