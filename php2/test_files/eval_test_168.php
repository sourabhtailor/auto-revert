<?php
// Eval injection test variation #168
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>