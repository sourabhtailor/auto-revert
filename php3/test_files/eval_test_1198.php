<?php
// Eval injection test variation #1198
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>