<?php
// Eval injection test variation #161
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>