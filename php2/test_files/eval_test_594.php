<?php
// Eval injection test variation #594
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>