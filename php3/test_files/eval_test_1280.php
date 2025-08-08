<?php
// Eval injection test variation #1280
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>