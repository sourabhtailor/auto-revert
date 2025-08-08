<?php
// Eval injection test variation #134
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>