<?php
// Eval injection test variation #1370
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>