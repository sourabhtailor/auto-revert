<?php
// Eval injection test variation #527
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>