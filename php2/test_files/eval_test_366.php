<?php
// Eval injection test variation #366
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>