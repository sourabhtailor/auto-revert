<?php
// Eval injection test variation #1150
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>