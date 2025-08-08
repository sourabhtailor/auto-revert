<?php
// Eval injection test variation #78
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>