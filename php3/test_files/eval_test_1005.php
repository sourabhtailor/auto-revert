<?php
// Eval injection test variation #1005
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>