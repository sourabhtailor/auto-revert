<?php
// Eval injection test variation #93
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>