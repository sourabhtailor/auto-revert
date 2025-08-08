<?php
// Eval injection test variation #509
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>