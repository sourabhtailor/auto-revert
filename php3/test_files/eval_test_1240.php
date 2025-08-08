<?php
// Eval injection test variation #1240
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>