<?php
// Eval injection test variation #465
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>