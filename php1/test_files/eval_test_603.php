<?php
// Eval injection test variation #603
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>