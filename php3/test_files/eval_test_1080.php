<?php
// Eval injection test variation #1080
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>