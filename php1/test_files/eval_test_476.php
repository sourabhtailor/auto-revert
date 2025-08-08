<?php
// Eval injection test variation #476
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>