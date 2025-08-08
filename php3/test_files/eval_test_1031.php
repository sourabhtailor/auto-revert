<?php
// Eval injection test variation #1031
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>