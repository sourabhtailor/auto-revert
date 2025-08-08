<?php
// Eval injection test variation #1094
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>