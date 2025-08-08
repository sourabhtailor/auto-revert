<?php
// Eval injection test variation #1039
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>