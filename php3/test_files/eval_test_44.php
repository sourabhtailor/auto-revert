<?php
// Eval injection test variation #44
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>