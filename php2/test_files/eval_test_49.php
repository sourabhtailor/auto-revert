<?php
// Eval injection test variation #49
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>